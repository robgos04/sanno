@extends('admin.layout')

@section('title', 'Products')

@section('topbar-actions')
    @if(isset($productCount) && $productCount < 15)
        <a href="{{ route('admin.products.create') }}" class="btn-primary-red">
            <i class="fas fa-plus"></i> Add New
        </a>
    @else
        <span class="btn-primary-red" style="opacity:0.6; pointer-events:none; cursor:default;">
            <i class="fas fa-plus"></i> Max 15 Products
        </span>
    @endif

    <span style="margin-left:12px; color:#444; font-weight:600;">
        {{ isset($productCount) ? $productCount : $products->count() }} / 15
    </span>
@endsection

@section('content')
<div class="admin-card">
    <table class="admin-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('images/products/' . $product->productpic) }}"
                         alt="{{ $product->productname }}"
                         style="width:80px; height:60px; object-fit:cover; border-radius:6px;">
                </td>
                <td><strong>{{ $product->productname }}</strong></td>
                <td>{{ Str::limit($product->productdesc, 60) }}</td>
                <td>
                    <div style="display:flex; gap:8px;">
                        <a href="{{ route('admin.products.edit', $product) }}"
                           class="btn btn-sm btn-outline-secondary">Edit</a>
                        <form action="{{ route('admin.products.destroy', $product) }}"
                              method="POST"
                              onsubmit="return confirm('Delete this product?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align:center; color:#aaa; padding:40px;">
                    No products yet.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection