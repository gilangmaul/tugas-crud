<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function add_to_cart(Product $product, Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'product_desc' => 'required',
            'product_price' => 'required|numeric',
            'category_id' => 'required',
        ]);

        Cart::create([
            'name' => $validated['product_name'],
            'description' => $validated['product_desc'],
            'price' => $validated['product_price'],
            'category_id' => $validated['category_id']
        ]);
        return redirect('/layouts');
    }
}
