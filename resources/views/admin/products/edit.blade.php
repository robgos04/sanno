@extends('admin.layout')

@section('title', 'Edit Product')

@section('topbar-actions')
    <a href="{{ route('admin.products.index') }}" class="btn-primary-red">
        <i class="fas fa-arrow-left"></i> Back
    </a>
@endsection

@section('content')
<div class="admin-card" style="max-width:680px;">

    @if($errors->any())
        <div style="background:#fef2f2; border:1px solid #fca5a5; color:#b91c1c;
                    padding:12px 16px; border-radius:8px; margin-bottom:20px; font-size:0.85rem;">
            <ul style="margin:0; padding-left:16px;">
                @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label class="form-label">Product Name <span style="color:#c0281c;">*</span></label>
            <input type="text" name="productname" class="form-control"
                   value="{{ old('productname', $product->productname) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description <span style="color:#c0281c;">*</span></label>
            <textarea name="productdesc" class="form-control" rows="3"
                      required>{{ old('productdesc', $product->productdesc) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label">Product Image</label>
            <div style="margin-bottom:10px;">
                <img src="{{ asset('images/products/' . $product->productpic) }}"
                     alt="{{ $product->productname }}"
                     style="width:120px; height:90px; object-fit:cover; border-radius:8px;">
                <p style="font-size:0.78rem; color:#888; margin-top:4px;">Current image</p>
            </div>
            <input type="file" name="productpic" class="form-control" accept="image/*">
            <small style="color:#888; font-size:0.78rem;">Leave empty to keep current image</small>
        </div>

        <button type="submit" class="btn-primary-red" style="width:100%; justify-content:center;">
            <i class="fas fa-save"></i> Update Product
        </button>
    </form>
</div>
@endsection