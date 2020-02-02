<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuctionDocument extends Model
{
    //
    protected $fillable = ['auction_id', 
                           'document_id',
                           'document_date',
                           'document_number',
                           'remarks', 
                           'document',
                           'status',
                           'created_by',
                           'updated_by'
                       ];
}
