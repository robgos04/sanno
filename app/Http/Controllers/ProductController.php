<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ── Public front-end ─────────────────────────
    public function index()
    {
        $products = Product::all();
        $latestProductId = $products->max('id');
        return view('product', compact('products', 'latestProductId'));
    }

    // ── Admin: list all ──────────────────────────
    public function adminIndex()
    {
        $products = Product::all();
        $productCount = $products->count();

        return view('admin.products.index', compact('products', 'productCount'));
    }

    // ── Admin: show create form ──────────────────
    public function create()
    {
        if (Product::count() >= 15) {
            return redirect()->route('admin.products.index')
                             ->with('error', 'Maximum of 15 products reached. Delete an existing product before adding a new one.');
        }

        return view('admin.products.create');
    }

    // ── Admin: store ─────────────────────────────
    public function store(Request $request)
    {
        if (Product::count() >= 15) {
            return redirect()->route('admin.products.index')
                             ->with('error', 'Maximum of 15 products reached. Delete an existing product before adding a new one.');
        }

        $request->validate([
            'productname' => 'required|string|max:255',
            'productdesc' => 'required|string|max:255',
            'productpic'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $file     = $request->file('productpic');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images/products'), $filename);

        Product::create([
            'productname' => $request->productname,
            'productdesc' => $request->productdesc,
            'productpic'  => $filename,
        ]);

        return redirect()->route('admin.products.index')
                         ->with('success', 'Product added successfully.');
    }

    // ── Admin: show edit form ────────────────────
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // ── Admin: update ────────────────────────────
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'productname' => 'required|string|max:255',
            'productdesc' => 'required|string|max:255',
            'productpic'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $filename = $product->productpic;

        if ($request->hasFile('productpic')) {
            $oldPath = public_path('images/products/' . $product->productpic);
            if (file_exists($oldPath)) unlink($oldPath);

            $file     = $request->file('productpic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/products'), $filename);
        }

        $product->update([
            'productname' => $request->productname,
            'productdesc' => $request->productdesc,
            'productpic'  => $filename,
        ]);

        return redirect()->route('admin.products.index')
                         ->with('success', 'Product updated successfully.');
    }

    // ── Admin: delete ────────────────────────────
    public function destroy(Product $product)
    {
        $oldPath = public_path('images/products/' . $product->productpic);
        if (file_exists($oldPath)) unlink($oldPath);

        $product->delete();

        return redirect()->route('admin.products.index')
                         ->with('success', 'Product deleted.');
    }
}