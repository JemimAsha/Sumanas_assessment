<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PaymentController extends Controller
{
    public function charge(String $product, $price)
    {
        $user = Auth::user();
        return view('payment', [
            'user' => $user,
            'intent' => $user->createSetupIntent(),
            'product' => $product,
            'price' => $price
        ]);
    }

    public function processPayment(Request $request, String $product, $price)
    {
        // return $request;
        $user = Auth::user();
        $paymentMethod = $request->input('payment_method');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        $options['currency'] = 'INR';

        $options['amount'] = $price * 100;

        // if ($this->hasStripeId()) {
            // $options['customer'] = $this->stripe_id;
        // }

        $options['description'] = "New Cashier bill";
        // $options['payment_method'] = "pm_1M7lsTSCs4iuk49r0xaFrRan";

        try {
            $user->charge($price * 100, $paymentMethod,$options);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error creating subscription. ' . $e->getMessage()]);
        }
        return redirect()->back()->with('message', 'Payment Completed Successfully!');
    }
}
