<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditPaymentAuctionDetail extends Model
{
    //
    protected $fillable = ['unique_id',
                           'histroy_id', 
                           'auction_id', 
                           'payment_date',
                           'paid_amount',
                           'pending_amount',
                           'penalty_amount',
                           'discount_amount',
                           'credit_amount',
                           'status',
                           'created_by',
                           'updated_by'
                       ];
}
