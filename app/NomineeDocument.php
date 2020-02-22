<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NomineeDocument extends Model
{
    //
    protected $fillable = ['nominee_id', 
                            'document_id',
                            'document_date',
                            'remarks', 
                            'document',
                            'document_number',
                            'status',
                            'created_by',
                            'updated_by'
                 ];
}
