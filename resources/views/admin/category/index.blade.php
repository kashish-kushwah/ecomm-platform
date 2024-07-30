@extends('admin.layouts.main')
@section('content')
  <a href="{{ route('admin.category.create') }}" class="btn btn-primary mb-2">Create</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->title }}</td>
          <td><img src="{{ asset('images/categories/' . $item->image) }}" width="100"></td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
