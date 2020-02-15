<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Models\Transaction;
use App\Models\Currency;
use App\Models\Wallet;
use App\Models\Airtime;
use Illuminate\Http\Request;


class AirtimeController extends Controller
{
    


public function buydata(){
$url    =  "http://140.86.97.63/vasb2b/dev/Api/exchange";
$clientcode = "AFMN-3GQ|QT3F97R:";
$apikey =  "uXVtUGNdZT3G39L5N5Y2h9pBM9CH9L4Zmt9L3ANFuEg2MY3erD";
$secret_key="sK^H}xg8<%q66GC";

$auth="$clientcode|$apikey|$secret_key";
$auth = hash( 'sha256', $auth );
 dd($auth);  

$payload= array(
    "customerReferenc"=>121501004001,
    "serviceId"=>"AUA"
);
 
// $curl = curl_init();
// $auth_data = array(
//     'api_key'=> 'uXVtUGNdZT3G39L5N5Y2h9pBM9CH9L4Zmt9L3ANFuEg2MY3erD',
//     'secret_key'=> 'sK^H}xg8<%q66GC',
//     'client_code' => 'AFMN-3GQ|QT3F97R:'
// );
// curl_setopt($curl, CURLOPT_POST, 1);
// curl_setopt($curl, CURLOPT_POSTFIELDS, $auth_data);
// curl_setopt($curl, CURLOPT_URL, 'http://140.86.97.63/vasb2b/dev/Api/exchange');
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// $result = curl_exec($curl);
// if(!$result){die("Connection Failure");}
// curl_close($curl);
// dd($result);


    curl_setopt_array($curl, array(
    CURLOPT_URL => "http://140.86.97.63/vasb2b/dev/Api/exchange",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS =>json_encode($payload),
    CURLOPT_HTTPHEADER => array("Authorization:".$auth, "Accept:application/json"),
));
$response = curl_exec($curl);
curl_close($curl);

dd($response);

}

}
