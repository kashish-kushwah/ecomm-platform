@extends('layouts.app')
@section('content')
  <div class="padding-large container">
    <h3>Search result for <b>{{ $term }}</b></h3>
    <hr class="mb-5">
    <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
      @forelse ($products as $product)
        <div class="card mt-3 mb-3" style="width: 23%">
          <div class="card-body">
            <h5 class="card-title">{{ substr($product->description, 0, 20) . '...' }}</h5>
            <p class="card-text">Price: {{ $product->price }}</p>
            <p class="card-text">Description: {{ substr($product->description, 0, 50) . '...' }}</p>
            <p class="text-center"><a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Read
                More</a></p>
          </div>

        </div>
      @empty
        <div class="col">No items found</div>
      @endforelse
    </div>
    <div class="row mt-3">
      <div class="col-12">{{ $products->withQueryString()->links() }}</div>
    </div>
  </div>
@endsection
