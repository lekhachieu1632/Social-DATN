<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $table = 'user_info';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_id','fullname', 'subname', 'email','phone','avatar','image_cover','introduce','relationship','birthday','path','hometown','address','story','created_at','updated_at'
    ];
    public function getUser()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
