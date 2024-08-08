@extends('layouts.empty')
@section('content')
  <div style="padding-left: 20px;"></div>
  <h4 class="pb-1">New Product Inquiry</h4>
  <p>Product: ID: {{ $product->id}}, Name: {{ $product->title }}</p>
  <p>Name: {{ strip_tags($contact['name'])}}</p>
  <p>Email: {{ strip_tags($contact['email'])}}</p>
  <p>Phone: {{ strip_tags($contact['phone'])}}</p>
  <p>Subject: {{ strip_tags($contact['subject'])}}</p>
  <p>Message: {{ strip_tags($contact['body'])}}</p>
@endsection
