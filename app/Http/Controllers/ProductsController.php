<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    $products = Product::where('name', 'like', "%$query%")
                       ->orWhere('description', 'like', "%$query%")
                       ->get();
    return view('products.search', compact('products'));
}

}
