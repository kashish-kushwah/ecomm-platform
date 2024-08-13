@extends('layouts.app')
@section('content')
  <div class="padding-large container">
    <h3>Search result for <b>{{ $term }}</b></h3>
    <hr class="mb-5">
    <div class="row">
      <div class="col-3">
        <form method="get" action="{{ route('front.product.search') }}">
          <input type="hidden" name="term" value="{{request()->get('term')}}">
          <table>
            <tr>
              <td><input required type="text" name="min" placeholder="Min" value="{{ request()->get('min') }}"></td>
            </tr>
            <tr>
              <td><input required type="text" name="max" placeholder="Max" value="{{ request()->get('max') }}"></td>
            </tr>
            <tr>
            <td><button type="submit" class="search-submit">Filter</button></td>
            </tr>
          </table>
          
        </form>
      </div>
      <div class="col-9">
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
    </div>

  </div>
@endsection
