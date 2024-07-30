@extends('admin.layouts.main')
@section('content')
  <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Create Category</h3>
    <table class="table">
      <tr>
        <td><input type="text" class="form-control" placeholder="Title" name="title"></td>
      </tr>
      <tr>
        <td><input type="file" class="form-control" placeholder="image" name="image"></td>
      </tr>
      <tr>
        <td><button type="submit" class="btn btn-primary">Save</button></td>
      </tr>
    </table>

  </form>
@endsection
