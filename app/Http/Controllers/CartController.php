<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        Cart::add(
                $request->game_id, 
                $request->name,
                1,
                $request->price, 
                [
                    'platform' => $request->platform, 
                    'image' => $request->image, 
                    'slug' => $request->slug
                ])
            ->associate('App\Game');

        return view('cart')->with('productAddedSuccessMessage', 'has been added to cart.');  
    }

    public function increaseProductQuantity(Request $request, $rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, $product->qty + 1);
        
        return back()->with('quantityIncreasedMessage', 'Product quantity has been increased.');
    }

    public function decreaseProductQuantity(Request $request, $rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, $product->qty - 1);
        
        return back()->with('quantityDecreasedMessage', 'Product quantity has been decreased.');
    }

    public function empty()
    {   
        if (Cart::count() == 0)
        {
            return back()->with('emptyCartErrorMessage', 'Cart is already empty!');
    
        }

        Cart::destroy();

        return back()->with('emptyCartSuccessMessage', 'Cart has been emptied.');
    }

    public function removeSingleProduct($rowId)
    {
        Cart::remove($rowId);

        return back()->with('removedSingleProductSuccessMessage', 'Product has been removed from cart.');
    }

}
