<?php

namespace App\client;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'client_name',
        'telephone_number',
        'client_address',
        ];
    
}