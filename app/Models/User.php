<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{


    protected $table = 'user';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
        'type',
        'status',
        'created_at',
        'updated_at',
        'on_last_time',
        'password_last_time',
        'remake_password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'user_id');
    }

    public function formatDate($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

}
