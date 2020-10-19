<?php

namespace App\Models;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAddress extends BaseModel
{


    protected $fillable = [
      'user_id',
        'street',
        'country',
        'city',
        'house_number',
        'zip_code'
    ];

    const FIELDS = ['city', 'country', 'street', 'house_number', 'zip_code'];

    const RULES = [
        'city' => ['required', 'string', 'max:255'],
        'country' => ['required', 'string', 'max:255'],
        'house_number' => ['required', 'number','max:30'],
        'street' => ['required', 'string', 'max:255'],
        'zip_code' => ['required', 'string', 'max:4'],
    ];


}
