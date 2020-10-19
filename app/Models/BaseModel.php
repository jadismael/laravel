<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BaseModel extends Model
{

    const RULES = [];
    protected $aData;

    public function __construct($aData = [])
    {
        $this->aData = $aData;
        parent::__construct($aData);
    }


    /**
     * Creates and Saves model to database
     *
     * @param  array  $data
     * @return Model
     */

    public static function create(array $data)
    {
        self::validator($data);
        // Get the currently authenticated user's ID...
        $userId = Auth::id();
        $data ['user_id'] = $userId;
        return static::query()->create($data);
    }


    /**
     * Get a validator for current model if CONST RULES is set.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    private static function validator(array $data)
    {
        if (!empty(self::RULES)) {
            return Validator::make($data, self::RULES);
        }
    }

}
