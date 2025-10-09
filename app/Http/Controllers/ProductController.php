<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index');
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $product = Product::create($data);
        return redirect('/products/' . $product->id . '/show');
    }

    public function show($id) {
        $product = Product::find($id);
        return view('products.show', ['singleProduct' => $product]);
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products/');
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('products.edit', ['singleProduct' => $product]);
    }
}
