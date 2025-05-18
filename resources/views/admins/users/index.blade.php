@extends('admins.users')

@section('title', 'User Management')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>List of Users</h3>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
    </div>

    @if($users->count())
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>Profile Image</th>
                    <th>Full Name</th>
                    <th>Birthdate</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            @if($user->profile_image)
                                <img src="{{ asset('images/users/' . $user->profile_image) }}" alt="Profile" width="60" height="60" class="rounded-circle">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </td>
                        <td>{{ $user->last_name }}, {{ $user->first_name }} {{ $user->middle_name }}</td>
                        <td>{{ $user->birthdate }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->contact_number }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    @else
        <p>No users found.</p>
    @endif
@endsection
