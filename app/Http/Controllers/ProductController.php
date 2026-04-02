<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return Inertia::render('ProductList', ['prods' => $products]);
    }

    public function new(Request $request)
    {
        $product = new Product();
        if ($request->isMethod('POST')) {
            $product->status = 1;
            $product->code = $request->code;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();
            return Inertia::location('product.index');
        } else {
            return Inertia::render('ProductNew');
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->isMethod('UPDATE')) {
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->save();
            return Inertia::location('product.index');
        } else {
            return Inertia::render('ProductUpdate', ['product' => $product]);
        }
    }

    public function delete(Request $request, $id)
    {
        Product::destroy($id);
        return Inertia::location('product.index');
    }

}
