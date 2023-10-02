<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        return view('admin.product.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
            'description' => 'max:400',
            'image' => 'image|file|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|max:50',
            'discount' => 'required|numeric'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('image');
        }

        Product::create($validated);

        return redirect('/product')->with('success', 'Product has been saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'max:400',
            'image' => 'image|file|max:2048',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category' => 'required|max:50',
            'discount' => 'required|numeric'
        ]);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validated['image'] = $request->file('image')->store('image');
        }

        Product::where('id', $product->id)
                ->update($validated);

        return redirect('/product')->with('success', 'Data has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
