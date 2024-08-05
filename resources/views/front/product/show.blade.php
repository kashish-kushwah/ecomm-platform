@extends('layouts.app')

@section('content')
<div class="padding-large container">
    <div class="d-flex gap-3 mt-4 mb-4">
        <div style="width: 40%;">
            <img src="{{ asset('images/products/'.$product->image)}}" class="img-thumbnail" alt="">
        </div>
        <div class="" style="width: 60%;">
            <h1 class="mt-0">{{ $product->title }}</h1>
            <p>{{ $product->description }}</p>
            <p>Price: ${{ $product->price }}</p>
            <form action="{{ route('front.cart.addtocart',$product->id )}}" method="post">
                @csrf
                <div class="d-flex justify-content-start gap-2 align-items-center">
                    <div>
                        <input type="number" name="qty" min="1" step="1" id="" value="1" class="form-control">
                    </div>
                    <div>
                        <button class="btn btn-outline-primary" type="submit">Add To Cart</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection