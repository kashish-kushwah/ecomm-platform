@extends('admin.layouts.main')

@section('content')
<div class="container">
<h1>Create Product</h1>
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-2">
        <label for="name">Category:</label>
        <select name="category_id" class="form-control" id="">
            @foreach (\App\Models\Category::where('status','1')->orderBy('title')->get() as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Title:</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
    </div><br>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
    </div><br>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" name="price" class="form-control" id="price" >
    </div><br>
    <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="1" {{ (isset($product) && $product->status) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (isset($product) && !$product->status) ? 'selected' : '' }}>Inactive</option>
    </select><br>
    <div class="form-group">
            <label for="img" class="form-label">Image</label>
           <br><input type="file" id="myFile" class="form-control" name="image" required>
        </div><br>   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
@endsection
