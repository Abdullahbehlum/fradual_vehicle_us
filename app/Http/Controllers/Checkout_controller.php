<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class Checkout_controller extends Controller
{

    public function Process_controller(Request $request)
    {
        $package_name = $request->input('package_name');
        $amount =  $request->input('amount');
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",

            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $amount
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] !== null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == "approve") {
                    session()->put('package_name', $package_name);
                    return redirect()->away($links['href']);
                }
            }
        } else {
            return redirect()->route('checkout_cancel');
        }
    }

    public function Success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        
    }
    public function Cancel(Request $request) {}
}
