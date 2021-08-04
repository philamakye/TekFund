<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\campaign_contribution;
use App\Models\UserContribution;
use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Paystack;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Location;

class PaymentController extends Controller
{
    //

//     public function pay(Request $request){

//         $url = "https://api.paystack.co/transaction/initialize";
//         $fields = [
//           'email' => "customer@email.com",
//           'amount' => "20000"
//         ];
//         $fields_string = http_build_query($fields);
//         //open connection
//         $ch = curl_init();

//         //set the url, number of POST vars, POST data
//         curl_setopt($ch,CURLOPT_URL, $url);
//         curl_setopt($ch,CURLOPT_POST, true);
//         curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
//         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//           "Authorization: Bearer SECRET_KEY",
//           "Cache-Control: no-cache",
//         ));

//         //So that curl_exec returns the contents of the cURL; rather than echoing it
//         curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

//         //execute post
//         $result = curl_exec($ch);
//         echo $result;



//        // return view('layouts.payments.paymentSuccess');




// }




/**
 * Obtain Paystack payment information
 * @return void
 */


public function verify(){

$ref = $_GET['reference'];



if ($ref == "") {
    # code...
    header("Location:javascript://history.go(-1)");
}

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_40de03a7717f9f28d57a2ce05b876ab01e872381",
        "Cache-Control: no-cache",
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
    //  echo $response;
     $result = json_decode($response);

    }



    if ($result->data->status == 'success') {
        # code...
        $contribution = new UserContribution();
        $contribution->reference = $result->data->reference;
        $contribution->status = $result->data->status;
        $fn = $result->data->customer->first_name;
        $Sn = $result->data->customer->last_name;
        $name=  $fn;
        $contribution->contributor_name = $name;
        $contribution->cont_email = $result->data->customer->email;
        $contribution->transaction_phone_num = $result->data->customer->phone;
        $amount = $result->data->amount;
        $amount= $amount/100;
        $contribution->	contributed_amount = $amount;
        date_default_timezone_set('Africa/Accra');
        $Date_time = date('d/m/Y h:i:s a', time());
        $contribution->paidAt = $Date_time;
        $contribution->save();


        $campCont = new campaign_contribution();
        $campCont->total_amount += $amount;
        $campCont->num_contributors += 1;
        $campCont->last_contribution = $Date_time;
        $campCont->save();

         return view('layouts.payments.verify_transaction');

    }else{
        header("Location: http://127.0.0.1:8000/campaign");
    }



}


}
