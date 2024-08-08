@extends("layouts.empty")
@section("content")

          <h4 class="pb-1">Order Details</h4>
          <table class="table table-bordered align-middle">
            <thead class="cart-row cart-header small-hide position-relative">
              <tr>
                <th colspan="2" class="text-start">Product</th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Total</th>

              </tr>
            </thead>
            <tbody class="border-sm-top-0">
              @foreach ($order->orderDetail as $row)
                <tr class="cart-row cart-flex position-relative">
                  <td class="cart-image cart-flex-item">
                    <a href="javascript:void(0);">
                      <img class="cart-image rounded-0 blur-up lazyloaded"
                        
                        src="{{ asset('images/products/'.$row->image) }}"
                        alt="{{ $row->product->title }}" width="120" height="170">
                    </a>
                  </td>
                  <td class="cart-meta small-text-left cart-flex-item">
                    <div class="list-view-item-title">
                      {{ $row->product->title }}
                    </div>


                  </td>
                  <td class="cart-price cart-flex-item text-center small-hide">
                    <span class="money">{{ env('CURRENCY_SYMBOL') . $row->price }}</span>
                  </td>
                  <td class="cart-update-wrapper cart-flex-item text-end text-md-center">
                    <div class="cart-qty d-flex justify-content-end justify-content-md-center">
                      <div class="qtyField">
                        {{ $row->qty }}
                        </>
                      </div>

                  </td>
                  <td class="cart-price cart-flex-item text-center small-hide">
                    <span class="money fw-500">{{ env('CURRENCY_SYMBOL') . $row->qty * $row->price }}</span>
                  </td>

                </tr>
              @endforeach


            </tbody>
            <tfoot>

            </tfoot>
          </table>

          <div class="row mt-4 pt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-col">

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
              <div class="cart-info">
                <h5>Shipping address</h5>
                <div class="item d-flex flex-rows align-items-center justify-content-between mt-3">
                  <div>
                    {!! $order->address->address_line1.'<br>'.$order->address->address_line2 !!}
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-4 cart-footer">
              <div class="cart-info">
                <div class="cart-order-detail cart-col">
                  {{-- <div class="row g-0 border-bottom pb-2">
                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Subtotal</strong></span>
                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                        class="money">{{ env('CURRENCY_SYMBOL') . number_format($order->, 2) }}</span></span>
                  </div>

                  <div class="row g-0 border-bottom py-2">
                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Tax</strong></span>
                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                        class="money">${{ env('CURRENCY_SYMBOL') . number_format($tax, 2) }}</span></span>
                  </div>
                  <div class="row g-0 border-bottom py-2">
                    <span class="col-6 col-sm-6 cart-subtotal-title"><strong>Shipping</strong></span>
                    <span class="col-6 col-sm-6 cart-subtotal-title cart-subtotal text-end"><span
                        class="money">{{ env('CURRENCY_SYMBOL') . number_format($shipping, 2) }}</span></span>
                  </div> --}}
                  <div class="row g-0 pt-2">
                    <span class="col-6 col-sm-6 cart-subtotal-title fs-6"><strong>Total</strong></span>
                    <span class="col-6 col-sm-6 cart-subtotal-title fs-5 cart-subtotal text-end text-primary">
                    <b
                        class="money">
                        {{ env('CURRENCY_SYMBOL') . number_format($order->total_amount, 2) }}
                      </b></span>
                  </div>

                  {{-- <p class="cart-shipping mt-3">Shipping &amp; taxes calculated at checkout</p> --}}

                
                </div>
              </div>
            </div>

          </div>
        
@endsection