<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class PageController extends Controller
{
    // Function
    public function home() {
        return view('home');
    }

    // Function
    public function basket() {
        return view('basket');
    }

    // Function
    public function contact_us() {
        return view('contact_us');
    }

    // Function
    public function health_benefits() {
        return view('health_benefits');
    }

    // Function
    public function rising_desks() {
        return view('rising_desks');
    }
    
    //Search Function
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")
                           ->orWhere('description', 'like', "%$query%")
                           ->get();
        return view('products.search', compact('products'));
    }

    public function profile() 
    {
        
    return view('auth.profile');
    
    }
}
