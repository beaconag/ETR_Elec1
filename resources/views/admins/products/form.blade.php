<div class="row mb-3">
    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name ?? '') }}">
    </div>
    <div class="col-md-6">
        <label class="form-label">Category</label>
        <select name="category" class="form-select">
            @php
                // $categories = ['Memory Cards & Readers', 'USB Flash Drives', 'Dual Drives', 'SSDs'];
                $selectedCategory = old('category', $product->category ?? '');
            @endphp
            <option value="" disabled {{ $selectedCategory === '' ? 'selected' : '' }}>-- Select Category --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $selectedCategory === $category ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label class="form-label">Availability Status</label>
        <select name="availability_status" class="form-select">
            @php
                $statuses = ['In Stock', 'Out of Stock'];
                $selectedStatus = old('availability_status', $product->availability_status ?? '');
            @endphp
            <option value="" disabled {{ $selectedStatus === '' ? 'selected' : '' }}>-- Select Status --</option>
            @foreach ($statuses as $status)
                <option value="{{ $status }}" {{ $selectedStatus === $status ? 'selected' : '' }}>
                    {{ $status }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label class="form-label">Product Image</label>
        <div class="row g-2 align-items-center">
            @if(!empty($product->image_url))
                <div class="col-auto">
                    <img src="{{ asset('images/products/' . $product->image_url) }}" alt="Current Image" class="img-thumbnail" style="width: 80px; height: auto;">
                </div>
            @endif
            <div class="col">
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-4">
        <label class="form-label">Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price', $product->price ?? '') }}">
    </div>
    <div class="col-md-4">
        <label class="form-label">Discount (%)</label>
        <input type="number" step="0.01" name="discount" class="form-control" value="{{ old('discount', $product->discount ?? '') }}">
    </div>
    <div class="col-md-4">
        <label class="form-label">Total Sales</label>
        <input type="number" step="0.01" name="total_sales" class="form-control" value="{{ old('total_sales', $product->total_sales ?? '') }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label class="form-label">Total Quantity</label>
        <input type="number" name="total_quantity" class="form-control" value="{{ old('total_quantity', $product->total_quantity ?? '') }}">
    </div>
    <div class="col-md-6">
        <label class="form-label">Units Sold</label>
        <input type="number" name="units_sold" class="form-control" value="{{ old('units_sold', $product->units_sold ?? '') }}">
    </div>
</div>


