@extends('admins.users')

@section('title', 'User Details')

@section('content')
<div class="card shadow-sm mx-auto" style="max-width: 600px;">
    <div class="card-header text-center">
        <h4 class="mb-0">User Details</h4>
    </div>
    <div class="card-body">
        @if ($user->profile_image)
            <div class="text-center mb-4">
                <img src="{{ asset('images/users/' . $user->profile_image) }}" alt="Profile Image" class="img-thumbnail rounded-circle" style="max-width: 150px; height: 150px; object-fit: cover;">
            </div>
        @endif

        <dl class="row">
            <dt class="col-sm-4 text-muted">Name</dt>
            <dd class="col-sm-8">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</dd>

            <dt class="col-sm-4 text-muted">Email</dt>
            <dd class="col-sm-8">{{ $user->email }}</dd>

            <dt class="col-sm-4 text-muted">Contact Number</dt>
            <dd class="col-sm-8">{{ $user->contact_number }}</dd>

            <dt class="col-sm-4 text-muted">Birthdate</dt>
            <dd class="col-sm-8">{{ \Carbon\Carbon::parse($user->birthdate)->format('M d, Y') }}</dd>

            <dt class="col-sm-4 text-muted">Address</dt>
            <dd class="col-sm-8">{{ $user->address }}</dd>

            <dt class="col-sm-4 text-muted">Role</dt>
            <dd class="col-sm-8">{{ ucfirst($user->role) }}</dd>
        </dl>

        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('users.index') }}" class="btn btn-secondary px-4">Back</a>
        </div>
    </div>
</div>
@endsection
