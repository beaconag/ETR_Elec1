@extends('admins.users')

@section('title', 'Edit User')

@section('content')
    <h3>Edit User</h3>
    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        <div class="card shadow-sm p-4">
            @include('users.form', ['buttonText' => 'Update User'])
        </div>
    </form>
@endsection
