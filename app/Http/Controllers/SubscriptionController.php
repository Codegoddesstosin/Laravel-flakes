<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SubscriptionController extends Controller
{
    
    public function index()
    {
    	return view('subscribe');
    }


    public function store (Request $request)
    {
    	/*// Set your secret key: remember to change this to your live secret key in production
     // See your keys here: https://dashboard.stripe.com/account/apikeys
       \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
       */

       $token = $request->stripeToken;

        /*// Create a Customer:
      $customer = \Stripe\Customer::create([
    
    'email' => $request->email,
    'source' => ' tok_mastercard',
    ]);

     // Charge the Customer instead of the card:
      $charge = \Stripe\Charge::create([
    'amount' => 3000,
    'currency' => 'usd',
    'customer' => $customer->id,
]);*/

      // YOUR CODE: Save the customer ID and other info in a database for later.

      //auth()->user()->update(['stripe_id'=>$customer->id]);


     auth()->user()->newSubscription('main', 'plan_DPcKHyvqXvyfte')->withCoupon($request->coupon)->create($token);

     auth()->user()->assignRole('manage');

     return redirect ('/blog');


    // When it's time to charge the customer again, retrieve the customer ID.
     /* $charge = \Stripe\Charge::create([
    'amount' => 1500, // $15.00 this time
    'currency' => 'usd',
    'customer' => $customer_id, // Previously stored, then retrieved
      ]);*/
   }
}
