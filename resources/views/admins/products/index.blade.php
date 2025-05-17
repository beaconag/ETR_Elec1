@extends('admins.products')

@section('content')
    <h1 class="mb-4">List of Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add Product</a>

    <table class="table table-bordered table-hover table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Status</th>
                <th>Image</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Total Qty</th>
                <th>Units Sold</th>
                <th>Total Sales</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ Str::limit($product->description, 50) }}</td>
                    <td class="text-center">{{ $product->availability_status }}</td>
                    <td class="text-center">
                        @if ($product->image_url)
                            <img src="{{ asset('images/products/' . $product->image_url) }}" alt="Product Image" width="50" height="50" style="object-fit: cover; border-radius: 4px;">
                        @else
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td class="text-end">₱{{ number_format($product->price, 2) }}</td>
                    <td class="text-center">{{ $product->discount ? number_format($product->discount, 2) . '%' : '0%' }}</td>
                    <td class="text-center">{{ $product->total_quantity }}</td>
                    <td class="text-center">{{ $product->units_sold }}</td>
                    <td class="text-end">₱{{ number_format($product->total_sales, 2) }}</td>
                    <td class="text-center">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="11" class="text-center">No products available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
