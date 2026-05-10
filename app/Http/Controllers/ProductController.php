<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'product_desc' => 'nullable'
        ]);

        Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'currency' => 'PHP',
            'product_desc' => $request->product_desc,
            'user_input' => Auth::id(),
        ]);

        return redirect()->back();
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'product_desc' => 'nullable'
        ]);

        $product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'product_desc' => $request->product_desc,
        ]);

        return redirect()->back();
    }
    
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->back();
    }
}