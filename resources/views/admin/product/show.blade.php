@extends('admin.layouts.main')
@section('content')
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->image }}</p>
    <p>{{ $product->description }}</p>
    <p>Price: ${{ $product->price }}</p>
    <p>{{ $product->status }}</p>
    <img src="{{ $product->image }}" alt="{{ $product->title }}">
@endsection