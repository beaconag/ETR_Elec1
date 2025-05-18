@extends('admins.users')

@section('title', 'Create User')

@section('content')
    <h3>Create User</h3>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        <div class="card shadow-sm p-4">
            @include('users.form', ['buttonText' => 'Create User'])
        </div>
    </form>
@endsection
