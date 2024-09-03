<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class BasketController extends Controller
{
    public function add(Request $request)
    {
        // Get the desk ID from the request
        $deskId = $request->input('desk_id');

        // Retrieve the current basket from the session, or create a new one if it doesn't exist
        $basket = Session::get('basket', []);

        // Check if the desk is already in the basket
        if (isset($basket[$deskId])) {
            // If it's already in the basket, increment the quantity
            $basket[$deskId]['quantity'] += 1;
        } else {
            // Otherwise, add the desk to the basket with a quantity of 1
            $basket[$deskId] = [
                'quantity' => 1,
                'price' => $this->getDeskPrice($deskId), // Example method to retrieve price
            ];
        }

        // Save the updated basket back to the session
        Session::put('basket', $basket);

        // Redirect back to the previous page with a success message
        return redirect()->back()->with('success', 'Desk added to basket!');
    }

    // Example method to retrieve the price of a desk based on its ID
    private function getDeskPrice($deskId)
    {
        // This is just an example. In a real application, you would retrieve the price from the database.
        $prices = [
            1 => 499.99,
            2 => 399.99,
            3 => 299.99,
            4 => 599.99,
            5 => 449.99,
        ];

        return $prices[$deskId] ?? 0;
    }

    use Stripe\Stripe;
use Stripe\Charge;

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



