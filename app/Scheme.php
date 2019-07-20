<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    //
    protected $fillable = ['chit_value', 
                            'no_of_member',
                            'res_fees', 
                            'enroll_fees',
                            'letter_fees',
                            'sort_form',
                            'monthly_due',
                            'created_by',
                            'updated_by'
                        ];
}
