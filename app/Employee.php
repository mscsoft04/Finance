<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['unique_id', 
                           'salutation_name',
                           'employee_name', 
                           'Initial_name',
                           'employee_code',
                           'relation_type',
                           'name_of_father',
                           'dob',
                           'age',
                           'gender',
                           'marital_status',
                           'doj',
                           'qualification',
                           'occupation',
                           'designation',
                           'document_id',
                           'document_number',
                           'mail_id',
                           'mobile_no',
                           'phone_no',
                           'address',
                           'state',
                           'district',
                           'taluk',
                           'village',
                           'pincode',
                           'porfile',
                           'status',
                           'created_by',
                           'updated_by'
                       ];
}
