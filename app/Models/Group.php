<?php


namespace App\Models;


class Group extends BaseModel
{


    public $timestamps = false;
    protected $table = 'group';
    protected $primaryKey = 'group_id';
    protected $fillable = [
        'name',
    ];


}
