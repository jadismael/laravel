<?php


namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'password',
    ];
    CONST RULES = [
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'phone_number' => ['required', 'max:30'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validator(array $data)
    {
        return Validator::make($data,self::RULES);
    }
    public static function create(array $data){

        $data ['password'] = Hash::make($data['password']);
       return static::query()->create($data);
    }

    public function address()
    {
        return $this->hasOne(UserAddress::class);
    }

    public function paymentInformation()
    {
        return $this->hasOne(UserPaymentInformation::class);
    }

    public function paymentData()
    {
        return $this->hasOne(UserPaymentData::class);
    }
}
