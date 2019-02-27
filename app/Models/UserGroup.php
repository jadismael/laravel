<?php


namespace App\Models;


class UserGroup extends BaseModel
{

    public $timestamps = false;
    protected $table = 'user_group';
    protected $primaryKey = 'user_group_id';
    protected $fillable = [
        'user_id','group_id'
    ];

    public function groupName()
    {
        return $this->hasOne(Group::class, 'group_id','group_id');
    }
}
