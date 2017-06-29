<?php

namespace ERC;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ERC\Client;

class Client extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'title',
        'birthdate',
        'gender',
        'civil_status',
        'email',
        'mobile_number',
        'address',
        'town',
        'city',
        'province',
        'postal_code',
        'country',
        'profession',
        'nationality',
        'created_by',
        'last_updated_by'
    ];

    public function getFullName()
    {
        $fullname = "{$this->first_name} {$this->middle_name} {$this->last_name}";
        return $fullname;
    }

    public function getCompleteAddress()
    {
        $address = "{$this->address} {$this->town} {$this->city} {$this->province} {$this->postal_code} {$this->country}";
        return $address;
    }

    public static function createNew($data)
    {
        $client = new static;
        $client->fill($data);
        if ($client->save())
        {
            return $client;
        }
        return null;
    }
}
