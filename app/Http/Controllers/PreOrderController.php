<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use Gloudemans\Shoppingcart\Facades\Cart;

class PreOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preOrderGames = Game::find([49, 50]);

        return view('products.pre-order')->with([
            'preOrderGames' => $preOrderGames
        ]);
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
