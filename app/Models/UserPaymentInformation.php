<?php

namespace App\Models;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserPaymentInformation extends BaseModel
{


    CONST FIELDS = ['iban', 'owner'];
    protected $fillable = [
        'user_id',
        'iban',
        'owner',

    ];

    public static function create(array $data)
    {
        self::validator($data);
        // Get the currently authenticated user's ID...
        $userId = Auth::id();
        $data ['user_id'] = $userId;
        return static::query()->create($data);
    }

    /**
     * Get a validator for an incoming address registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private static function validator(array $data)
    {
        return Validator::make($data, [
            'iban' => ['required', 'string', 'max:255'],
            'owner' => ['required', 'string', 'max:255'],
        ]);
    }

}
