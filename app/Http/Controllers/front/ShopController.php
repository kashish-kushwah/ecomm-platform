<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function show(Product $product)
    {
        // $product = Product::findOrFail($product->Id);
        return view('front.product.show', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $term = $request->term;
        $query = Product::query();
        if ($term) {
            $query->where('title', 'like', '%' . $term . '%');
        }

        if ($request->min != "") {
            $query->where(
                'price',
                '>=',
                $request->min,
            )->where(
                'price',
                '<=',
                $request->max,
            );
        }
        //echo $query->toRawSql();
        $products = $query->paginate(12);
        return view('front.product.search', ['products' => $products, 'term' => $term]);
    }
}
