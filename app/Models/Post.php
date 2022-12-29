<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'post';

    protected $fillable = [
        'user_id',
        'location_post',
        'image',
        'content',
        'likes'
    ];

    protected $dates=[
        'created_at',
        'updated_at',
    ];

    public function userInfo()
    {
        return $this->belongsTo(UserInfo::class, 'user_id');
    }

    public function userFriend()
    {
        return $this->belongsTo(UserInfo::class, 'location_post', 'user_id');
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'post_id')->where('user_id', session(\App\Setting\Setting_Static::KEY.'-id'));
    }
}
