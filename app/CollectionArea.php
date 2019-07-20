<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionArea extends Model
{
    //
    protected $fillable = ['branch_id', 
                           'area_name',
                           'village_name', 
                           'pin_code',
                           'created_by',
                           'updated_by'
                       ];
}
