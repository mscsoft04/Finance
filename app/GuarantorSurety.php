<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuarantorSurety extends Model
{
    //
    protected $fillable = ['auction_id', 
                            'salutation_name',
                            'guarantor_name',
                            'Initial_name', 
                            'relation_type',
                            'name_of_father',
                            'dob',
                            'age',
                            'gender',
                            'marital_status',
                            'guarantor_type',
                            'doj',
                            'mail_id',
                            'mobile_no',
                            'phone_no',
                            'address',
                            'state',
                            'district',
                            'taluk',
                            'village',
                            'pincode',
                            'occupation',
                            'designation',
                            'monthly_income',
                            'sourceof_fund',
                            'relationship',
                            'profile',
                            'status',
                            'created_by',
                            'updated_by'
                 ];
}
