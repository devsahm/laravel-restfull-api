<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillPayment extends Model
{
    // protected $fillables

    protected $fillable = [
        'user_id',
        'airtime_amount',
        'wallet_id',
        'airtime_reference_id',
        'airtime_phone_number',
        'transaction_state_id',
        ];

        // protected $fillable = [
        // 'user_id',
        // 'airtime_amount',
        // 'wallet_id',
        // 'airtime_reference_id',
        // 'airtime_phone_number',
        // 'transaction_state_id',
        // 'request_id',
        // 'gross',
        // 'fee',
        // 'net',
        // 'json_data',
        // 'currency_id',
        // 'currency_symbol'];

    public function Transactions(){
    return $this->morphMany('App\Models\Transaction', 'Transactionable');
    }

    	'user_id'=>Auth::user()->id,
            'wallet_id' =>$wallet->id,
            'transaction_type'=>'AIR'.Auth::user()->id,
    		'amount'=>$result_data->balance,
    		'currency_id' =>Auth::user()->currentCurrency()->id,
    		'device_number'=>$request->phone_number,
    		'refID'=>$request->referenceID,
    


}
