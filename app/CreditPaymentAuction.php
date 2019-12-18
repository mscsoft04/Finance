<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditPaymentAuction extends Model
{

    //
    protected $fillable = ['unique_id', 
                           'subscriber_id',
                           'auction_id', 
                           'payment_date',
                           'paid_amount',
                           'penalty_amount',
                           'discount_amount',
                           'pending_amount',
                           'credit_amount',
                           'status',
                           'created_by',
                           'updated_by'
                       ];
}
