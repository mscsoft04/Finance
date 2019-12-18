<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditPaymentAuctionHistory extends Model
{
    //
    protected $fillable = ['unique_id',
                           'subscriber_id', 
                           'auction_id', 
                           'payment_date',
                           'paid_amount',
                           'payment_type',
                           'bank_name',
                           'cheque_number',
                           'cheque_date',
                           'status',
                           'created_by',
                           'updated_by'
                       ];
}
