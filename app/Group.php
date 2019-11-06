<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    protected $fillable = ['branch_id', 
                           'schemes_id',
                           'type', 
                           'name',
                           'auction_date',
                           'start_date',
                           'first_due_date',
                           'fd_number',
                           'company_fd',
                           'fd_date',
                           'fd_bank',
                           'pso_number',
                           'blaw_number',
                           'cheque_no',
                           'company_chit',
                           'auction_time',
                           'commission',
                           'total_fd',
                           'fd_rate_interrest',
                           'maturity_amount',
                           'fd_branch',
                           'pso_date',
                           'blaw_date'
                        ];

}
