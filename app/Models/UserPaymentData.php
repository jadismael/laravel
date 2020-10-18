<?php

namespace App\Models;


use Illuminate\Support\Facades\Auth;

class UserPaymentData extends BaseModel
{


    CONST FIELDS = ['iban', 'owner'];
    protected $fillable = [
        'user_id',
        'payment_data_id',
    ];

    public static function create(array $data)
    {
        $userId = Auth::id();
        $data ['user_id'] = $userId;
        return static::query()->create($data);
    }



}
