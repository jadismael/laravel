<?php


namespace App\Models;


class UserLogin extends BaseModel
{

    public $timestamps = false;
    protected $table = 'user_login';
    protected $primaryKey = 'user_login_id';
    protected $fillable = [
        'user_id','time','date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id')
                    ->with('groups');
    }
}
