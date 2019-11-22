<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    //
    protected $fillable = ['branch_id', 
                           'salutation_name',
                           'subscriber_name',
                           'Initial_name', 
                           'relation_type',
                           'name_of_father',
                           'realtion_name',
                           'dob',
                           'age',
                           'gender',
                           'marital_status',
                           'doj',
                           'mail_id',
                           'mobile_no',
                           'phone_no',
                           'aadhar_no',
                           'pan_no',
                           'rationcard_no',
                           'driving_licence',
                           'voter_id',
                           'gst_no',
                           'p_address',
                           'p_state',
                           'p_district',
                           'p_taluk',
                           'p_village',
                           'p_pincode',
                           'c_address',
                           'c_state',
                           'c_district',
                           'c_taluk',
                           'c_village',
                           'c_pincode',
                           'agent_Type',
                           'refered_by',
                           'collection_area',
                           'occupation',
                           'retirement_date',
                           'monthly_income',
                           'sourceof_fund',
                           'profile',
                           'status',
                           'pf_no',
                           'relationship',
                           'relation_for',
                           'additional_notes',
                           'created_by',
                           'updated_by'


                        ];
}
