<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Product;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image'];

}

namespace App\Http\Controllers;


class BasketController extends Controller
{
    public function index()
    {
        return view('basket');
    }

    public function add(Product $product, Request $request)
    {
        $basket = session()->get('basket', []);

        if(isset($basket[$product->id])) {
            $basket[$product->id]['quantity']++;
        } else {
            $basket[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "total" => $product->price,
            ];
        }

        session()->put('basket', $basket);

        return redirect()->route('basket.index')->with('success', 'Product added to basket successfully!');
    }

    public function update(Product $product, Request $request)
    {
        if($request->quantity > 0) {
            $basket = session()->get('basket');

            $basket[$product->id]['quantity'] = $request->quantity;
            $basket[$product->id]['total'] = $basket[$product->id]['quantity'] * $basket[$product->id]['price'];

            session()->put('basket', $basket);

            return redirect()->route('basket.index')->with('success', 'Basket updated successfully!');
        }

        return redirect()->route('basket.index')->with('error', 'Invalid quantity!');
    }

    public function remove(Product $product)
    {
        $basket = session()->get('basket');

        if(isset($basket[$product->id])) {
            unset($basket[$product->id]);
            session()->put('basket', $basket);
        }

        return redirect()->route('basket.index')->with('success', 'Product removed successfully!');
    }

    public function checkout()
    {
        // Implement checkout process
        return view('checkout');
    }
}
