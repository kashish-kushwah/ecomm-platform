@extends('admin.layouts.main')

@section('content')
<div class="container">
<h1>Edit Product</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul> 
    </div>
@endif

<form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Category:</label>
        <select name="category_id" class="form-control" id="">
            @foreach (\App\Models\Category::where('status','1')->orderBy('title')->get() as $category)
            <option {{ $product->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $product->title }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" id="description">{{ $product->description }}</textarea>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" class="form-control" id="price" value="{{ $product->price }}">
    </div>
    <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="1" {{ (isset($product) && $product->status) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (isset($product) && !$product->status) ? 'selected' : '' }}>Inactive</option>
    </select>
    <div>
            <label for="img" class="form-label">Image</label>
           <br><input type="file" id="myFile" class="form-control" name="image" required>
        </div>
    <button type="submit" class="mb-2 mt-3 btn btn-primary">Submit</button>
</form>
</div>
@endsection
