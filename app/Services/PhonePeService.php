<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

class PhonePeService
{
    protected $client;
    protected $merchantId;
    protected $secretKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->merchantId = env('PHONEPE_MERCHANT_ID');
        $this->secretKey = env('PHONEPE_SECRET_KEY');
        $this->baseUrl = env('PHONEPE_BASE_URL');
    }

    public function initiatePayment($amount, $orderId)
    {
      
        $url = $this->baseUrl . '/pg/v1/pay';
        $data = [
            'merchantId' => $this->merchantId,
            'transactionId' => $orderId,
            'amount' => $amount * 100, // amount in paise
            'merchantOrderId' => $orderId,
            'merchantTransactionId' => $orderId,
            'redirectUrl' => route('front.phonepay.success',['oid' =>$orderId]),
            'callbackUrl' => route('front.phonepay.checkStatus',['oid' =>$orderId]),
        ];
        //dd($data);
        $response = $this->makeRequest('POST', $url, $data);

        return $response;
    }

    protected function makeRequest($method, $url, $data)
    {
        $attempts = 0;
        $maxAttempts = 2;
        $delay = 1000; // Initial delay in milliseconds

        while ($attempts < $maxAttempts) {
            try {
                Log::info("Attempting to initiate payment. Attempt: {$attempts}");
                Log::info("Request URL: {$url}");
                Log::info("Request Data: " . json_encode($data));

                $response = $this->client->request($method, $url, [
                    'json' => $data,
                    'headers' => [
                        'X-VERIFY' => $this->generateChecksum($data),
                        'Content-Type' => 'application/json'
                    ],
                ]);

                $responseBody = $response->getBody()->getContents();
                Log::info("Response: " . $responseBody);

                return json_decode($responseBody, true);
            } catch (RequestException $e) {
                $response = $e->getResponse();
                $statusCode = $response ? $response->getStatusCode() : 'No response';
                $responseBody = $response ? $response->getBody()->getContents() : 'No response body';

                if ($statusCode == 429) {
                    // Rate limit exceeded, retry after a delay
                    $attempts++;
                    Log::warning("Rate limit exceeded. Attempt {$attempts} of {$maxAttempts}. Retrying in {$delay} milliseconds...");
                    usleep($delay * 1000); // Convert milliseconds to microseconds
                    $delay *= 2; // Exponential backoff
                } else {
                    // Handle other exceptions and log detailed error
                    Log::error("Request failed: " . $e->getMessage() . " Status Code: {$statusCode} Response: {$responseBody}");
                    throw new \Exception("Request failed: " . $e->getMessage() . " Status Code: {$statusCode} Response: {$responseBody}");
                }
            }
        }

        throw new \Exception('Max retry attempts reached. Could not initiate payment.');
    }

    protected function generateChecksum($data)
    {
        $checksumString = json_encode($data);
        return hash_hmac('sha256', $checksumString, $this->secretKey) . '###' . $this->secretKey;
    }
}