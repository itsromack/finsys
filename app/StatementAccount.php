<?php

namespace ERC;

use Illuminate\Database\Eloquent\Model;

class StatementAccount extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'sa_number',
        'or_number',
        'transaction_date',
        'pax',
        'currency',
        'amount',
        'payment_mode',
        'transaction_type',
        'client_type',
        'details',
        'staff_notes',
        'recorded_by'
    ];

}
