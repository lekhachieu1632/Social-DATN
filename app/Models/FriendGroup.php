<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FriendGroup extends Model
{
    use HasFactory;
    protected $table = 'friend_groups';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_id_1',
        'user_id_2',
        'status',
        'created_at',
        'updated_at',
    ];
    function getUser(){
        return $this->hasOne('App\Models\UserInfo','user_id','user_id_2');
    }

}
