@extends('admins.products')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card shadow-sm p-4">
            @include('admins.products.form')
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" style="width: 200px;">Update</button>
            </div>
        </div>
    </form>
@endsection