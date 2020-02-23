<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    //

    protected $fillable = ['subscriber_id', 
                           'group_id',
                           'auction_number', 
                           'auction_amount',
                           'auction_date',
                           'commision_amount',
                           'gst_amount',
                           'dividend_amount',
                           'each_dividend_amount',
                           'due_amount',
                           'remarks',
                           'status',
                           'created_by',
                           'updated_by'
                       ];
}
