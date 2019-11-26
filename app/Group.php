<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = ['branch_id',
                           'unique_id', 
                           'schemes_id',
                           'type', 
                           'name',
                           'auction_day',
                           'auction_time',
                           'first_auction_date',
                           'second_auction_date',
                           'last_auction_date',
                           'pso_number',
                           'pso_date',
                           'blaw_number',
                           'blaw_date',
                           'blaw_amount',
                           'fd_branch',
                           'fd_number',
                           'fd_date',
                           'fd_amount',
                           'commission',
                           'total_fd',
                           'fd_rate_interrest',
                           'fd_maturity_interest',
                           'fd_maturity_date',
                           'maturity_amount',
                           'fd_bank',
                           'cheque_no',
                           'company_chit',
                           'group_Type',
                           'status',
                           'created_by',
                           'updated_by'
                           
                        ];

}
