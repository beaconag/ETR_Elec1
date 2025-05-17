@extends('admins.products')

@section('title', 'Create Product')

@section('content')
    <h1>Add Product</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-sm p-4">
            @include('admins.products.form')
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success px-4" style="width: 200px;">Save</button>
            </div>
        </div>
    </form>
@endsection