<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    //

    protected $fillable = ['branch_name', 
                           'branch_code',
                           'email', 
                           'phone_no',
                           'mobile_no',
                           'division',
                           'doo',
                           'age',
                           'address',
                           'bonus_days',
                           'bonus_precentage',
                           'phone_no',
                           'non_prize_subscriber_penalty',
                           'prize_subscriber_penalty',
                           'penalty_days',
                           'state',
                           'city',
                           'taluk',
                           'pincode',
                           'fd_total_month',
                           'remarks',
                           'created_by',
                           'updated_by',
                           'unique_id'

                        
                        ];
}
