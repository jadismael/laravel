<?php


namespace App\Models;


class User extends BaseModel
{

    public $timestamps = false;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups()
    {
        return $this->hasMany(UserGroup::class,'user_id','id')->with('groupName');
    }
}
