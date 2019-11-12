<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupAssign extends Model
{
    //
    protected $fillable = ['subscriber_id', 
                           'group_id',
                           'ticket_number', 
                           'agent_id',
                           'collection_type',
                           'created_by',
                           'updated_by'
                       ];
}
