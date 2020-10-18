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

    /**
     * Get a validator for an incoming address registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private static function validator(array $data)
    {
        return Validator::make($data, [
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'house_number' => ['required', 'number','max:30'],
            'street' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:4'],
        ]);
    }
    public static function create(array $data){
        self::validator($data);
        // Get the currently authenticated user's ID...
        $userId = Auth::id();
        $data ['user_id'] = $userId;
        return static::query()->create($data);
    }

}
