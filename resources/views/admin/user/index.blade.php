@extends('admin.layouts.main')

@section('content')
<div class="card-header">
    <h4 class="card-title">User Management</h4>
    <a href="{{ route('admin.user.create') }}" class="btn btn-primary mb-2 mt-2">Add User</a>
</div>
<div class="card-body">
    <div class="border border-dark rounded-3">
        <table class="table align-middle table-hover m-0">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="bi bi-pencil"></i></a>
                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-icon btn-sm mb-1"><i class="bi bi-trash"></i></button>
                        
                    </form>
                    <a href="{{ route('admin.user.change-password', $user->id) }}" class="btn btn-warning btn btn-info btn-sm">Change Password</a>
                </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</div>
@endsection
