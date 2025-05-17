@extends('admins.products')

@section('content')
    <div class="card shadow-sm p-4">
        <h2 class="mb-4">{{ $product->name }}</h2>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <p><strong>Category:</strong> {{ $product->category->name }}</p>
                <p><strong>Status:</strong> {{ $product->availability_status }}</p>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Discount:</strong> {{ $product->discount }}%</p>
            </div>
            <div class="col-md-6 text-center">
                @if(!empty($product->image_url))
                    <img src="{{ asset('images/products/' . $product->image_url) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 200px;">
                @else
                    <p>No Image Available</p>
                @endif
            </div>
        </div>

        <div class="mb-3">
            <h5>Description</h5>
            <p>{{ $product->description }}</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p><strong>Total Quantity:</strong> {{ $product->total_quantity }}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Units Sold:</strong> {{ $product->units_sold }}</p>
            </div>
            <div class="col-md-4">
                <p><strong>Total Sales:</strong> ${{ number_format($product->total_sales, 2) }}</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4" style="width: 200px;">Back to Products</a>
        </div>
    </div>
@endsection
