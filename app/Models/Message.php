<?php

namespace App\Models;

use App\Setting\Setting_Static;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table = 'message';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'group_id',
        'user_id',
        'message',
        'status',
        'created_at',
        'updated_at',
    ];


    function getUser(){
        return $this->hasOne('App\Models\UserInfo','user_id','user_id');
    }
    function getFriend(){
        return $this->hasOne('App\Models\FriendGroup','id','group_id');
    }
    public function Friend()
    {
        $data = FriendGroup::where('status', Setting_Static::STATIC_ONE)
            ->where('user_id_1', session(Setting_Static::KEY . '-id'))
            ->orWhere('user_id_2', session(Setting_Static::KEY . '-id'))
            ->orderBy('updated_at', 'desc')
            ->get()
            ->toArray();
        if ($data) {
            return $data;
        }
        return false;

    }
    public function getMessageId()
    {
        $arr= [];
        $data= $this->Friend();
        if(isset($data) && $data){
            foreach ($data as $key => $value){
                $model= Message::where('group_id',$value['id'])->orderBy('updated_at','desc')->first();
                if($model){

                    $arr[] = array_merge($value, $model->toArray());
                }
            }
        }


        return $arr;

    }
}
