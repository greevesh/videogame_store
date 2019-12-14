<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::add($request->game_id, $request->name, 1, $request->price, 
                [
                    'platform' => $request->platform, 
                    'image' => $request->image, 
                    'slug' => $request->slug
                ])
            ->associate('App\Game');

        $productAddedSuccessMessage = 'has been added to cart.';

        return redirect()->route('cart')->with(compact('productAddedSuccessMessage'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $product = Cart::get($rowId);
        Cart::update($rowId, $product->qty + 1);
        
        return back()->with('quantityIncreasedMessage', 'Product quantity has been increased.');
    }

    // public function decreaseQuantity(Request $request, $rowId)
    // {
    //     $product = Cart::get($rowId);
    //     Cart::remove($rowId, $product->qty - 1);
        
    //     return back()->with('quantityDecreasedMessage', 'Product quantity has been increased.');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {   
        if (Cart::count() > 0)
        {
            Cart::destroy();
            return back()->with('emptyCartSuccessMessage', 'Cart has been emptied.');
        }
        else
        {
            Cart::destroy();
            return back()->with('emptyCartErrorMessage', 'Cart is already empty!');
        }
    }

    public function removeSingleProduct($rowId)
    {
        Cart::remove($rowId);

        return back()->with('removeSingleProductSuccessMessage', 'Product has been removed from cart.');
    }

    // public function addShippingToTotal()
    // {
    //     $shipping = Cart::total();
    //     $completeTotal = Cart::total() + $shipping;

    //     if (Cart::total() > 0 && Cart::total() < 10)
    //     {
    //         $shipping = 10;
    //     }
    //     elseif (Cart::total() > 10 && Cart::total < 30)
    //     {
    //         $shipping = 15;
    //     }
    //     elseif (Cart::total() > 30)
    //     {
    //         $shipping = 20;
    //     }
    //     else 
    //     {
    //         $shipping = 0;
    //     }

    //     return view('cart')->with(compact('shipping'));
    // }
}
