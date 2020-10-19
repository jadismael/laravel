<?php

namespace App\Models;


class UserPaymentInformation extends BaseModel
{


    CONST FIELDS = ['iban', 'owner'];
    const RULES = [
        'iban' => ['required', 'string', 'max:255'],
        'owner' => ['required', 'string', 'max:255'],
    ];
    protected $fillable = [
        'user_id',
        'iban',
        'owner',

    ];


}
