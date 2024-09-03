<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Stripe\Stripe;
use Stripe\Charge;


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

    public function addToBasket(Request $request, $id)
{
    $basket = session()->get('basket', []);
    
    // Simulate getting product details from database
    $product = Product::find($id);
    
    if (!$product) {
        return redirect()->route('rising_desks')->with('error', 'Product not found');
    }
    
    if (isset($basket[$id])) {
        $basket[$id]['quantity'] += $request->input('quantity');
    } else {
        $basket[$id] = [
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->input('quantity'),
        ];
    }
    
    session()->put('basket', $basket);
    
    return redirect()->route('basket')->with('success', 'Item added to basket');
}

public function updateBasket(Request $request, $id)
{
    $basket = session()->get('basket', []);
    
    if (isset($basket[$id])) {
        $basket[$id]['quantity'] = $request->input('quantity');
        
        if ($basket[$id]['quantity'] <= 0) {
            unset($basket[$id]);
        }
        
        session()->put('basket', $basket);
    }
    
    return redirect()->route('basket')->with('success', 'Basket updated');
}

public function removeFromBasket($id)
{
    $basket = session()->get('basket', []);
    
    if (isset($basket[$id])) {
        unset($basket[$id]);
        session()->put('basket', $basket);
    }
    
    return redirect()->route('basket')->with('success', 'Item removed from basket');
}


public function checkout(Request $request)
{
    Stripe::setApiKey(env('STRIPE_SECRET'));

    $charge = Charge::create([
        'amount' => $request->amount * 100,
        'currency' => 'usd',
        'description' => 'Order Payment',
        'source' => $request->stripeToken,
    ]);

    // Process order, clear basket, etc.
    return redirect()->route('home')->with('success', 'Payment successful!');
}

}
