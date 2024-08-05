@extends('admin.layouts.main')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('admin.user.change-password-store', $user->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>
@endsection