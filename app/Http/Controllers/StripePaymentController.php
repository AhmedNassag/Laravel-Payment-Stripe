<?php

namespace App\Http\Controllers;

use Session;
use Stripe;
use Stripe\Stripe as StripeStripe;
use Illuminate\Http\Request;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }


    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        stripe\Charge::create
        ([
            'amount'      => 100*100,
            'currency'    => "usd",
            'source'      => $request->stripeToken,
            'description' => 'Test Payment By Stripe'
        ]);
        Session::flash('success','Payment has been successfully');
        return back();
    }
}
