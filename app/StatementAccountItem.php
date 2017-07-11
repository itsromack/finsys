<?php

namespace ERC;

use Illuminate\Database\Eloquent\Model;

class StatementAccountItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sa_id',
        'details'
    ];

}
