@extends('admin.layouts.main')

@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h4 class="card-title">Products</h4>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-3">Create Product</a>
        @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif
    </div>
    <div class="card-body">
        <div class="border border-dark rounded-3">
            <table class="table align-middle table-hover m-0">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
<tbody>
            @foreach($product as $product)
            <tr>
                    <td>{{ $product->title }}</td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}" style="width: 100px;">
                        @endif
                    </td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @if($product->status)
                            <span class="badge bg-success">Active</span>
                        @else
                            <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-info btn-icon btn-sm mb-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.product.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-icon btn-sm mb-1"><i class="bi bi-trash"></i>
                    </td>
                </tr>
                @endforeach
        </tbody>  
</table>
</div>
@endsection
