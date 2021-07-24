<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function pay(Request $request){

        $url = "https://api.paystack.co/transaction/initialize";
        $fields = [
          'email' => "customer@email.com",
          'amount' => "20000"
        ];
        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Authorization: Bearer SECRET_KEY",
          "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);
        echo $result;



       // return view('layouts.payments.paymentSuccess');
    }
}
