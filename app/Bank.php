<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    protected $fillable = ['branch_id', 
                            'type',
                            'bank_name', 
                            'account_holder',
                            'ac_number',
                            'ifsc',
                            'branch',
                            'opening_balance',
                            'address',
                            'created_by',
                            'updated_by'
                        ];
}
