<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{

    public $timestamps = false;
    protected $table = 'user_login';
    protected $primaryKey = 'user_login_id';
    protected $fillable = [
        'user_id','time','date','login_type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id')
                    ->with('groups');
    }

}
