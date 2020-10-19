<?php

namespace App\Models;

class UserPaymentData extends BaseModel
{

    CONST FIELDS = ['iban', 'owner'];
    CONST PAYMENT_DATA_ID='payment_data_id';
    protected $fillable = [
        'user_id',
        'payment_data_id',
    ];


}
