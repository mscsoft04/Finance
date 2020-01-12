<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DebitPayment extends Model
{
    //
    protected $fillable =[ 'unique_id', 
                           'auction_id',
                           'payment_date',
                           'payment_type',
                           'bank_name',
                           'cheque_number',
                           'cheque_date',
                           'amount',
                           'payable_amount',
                           'due_amount',
                           'gst_amount',
                           'processing_amount',
                           'other_amount',
                           'remarks',
                           'pay_amount',
                           'status',
                           'created_by',
                           'updated_by'
                        ];
}
