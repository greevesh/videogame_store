<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function store(Request $request)
    {
        // if user hasn't logged in
        if (!Auth::check()) 
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
            // the name and the email of the logged in user can not be validated here
            // as the inputs for those credentials would have been automatically filled by the app
            // if the user is logged in
            request()->validate([
                'address' => 'required|min:10',
                'address2',
                'country' => 'required',
                'postcode' => 'required',
                'card-name' => 'required'
            ]);
            

        // storing Stripe data
        $stripe = new Stripe();
        $stripe = Stripe::make('sk_test_IkkC8sO6532nzHtuCLayswle00ny0pBcZ4');

        try {
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'GBP',
                'source' => $request->stripeToken,
                'description' => 'Thank you for your purchase.',
                'receipt_email' => $request->email,
                'metadata' => [
                    'Quantity' => Cart::count(),
                    'Name' => Auth::check() ? Auth::user()->name : $request->name,
                    'Email' => Auth::check() ? Auth::user()->email : $request->email,
                    'Address' => $request->address, 
                    'Country' => $request->country,
                    'Postcode' => $request->postcode
                ],
            ]);

            $customer = $stripe->customers()->create(['email' => $request->email]);

            Cart::destroy();

            return redirect()->route('confirmation')
            ->with('paymentSuccessMessage', 'Thank you! Your payment has been accepted.');

        } 
            catch (CardErrorException $e) {
            return back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
