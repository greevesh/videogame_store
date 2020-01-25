<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
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
        if (Auth::check()) 
        {
            // the name and the email of the logged in user can not be validated here
            // as the inputs for those credentials have automatically been filled by the app
            request()->validate([
                'address' => 'required|min:10',
                'address2',
                'country' => 'required',
                'postcode' => 'required',
                'card-name' => 'required'
            ]);
        }
        else
        {
            request()->validate([
                'name' => 'required|min:5',
                'email' => 'required|min:10',
                'address' => 'required|min:10',
                'address2',
                'country' => 'required',
                'postcode' => 'required',
                'card-name' => 'required'
            ]);
        }

        // storing Stripe data
        $stripe = new Stripe();
        $stripe = Stripe::make('sk_test_IkkC8sO6532nzHtuCLayswle00ny0pBcZ4');

        try {
            $charge = Stripe::charges()->create([
                // 'amount' => getNumbers()->get('newTotal') / 100,
                'amount' => Cart::total(),
                'currency' => 'GBP',
                'source' => $request->stripeToken,
                'description' => 'Thank you for your purchase.',
                'receipt_email' => $request->email,
                'metadata' => [
                    // 'contents' => $contents,
                    'quantity' => Cart::count(),
                ],
            ]);

            $customer = $stripe->customers()->create(['email' => 'john@doe.com']);

            Cart::destroy();

            return redirect()->route('confirmation')
            ->with('paymentSuccessMessage', 'Thank you! Your payment has been accepted.');

        } 
            catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
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
