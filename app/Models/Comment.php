<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'comment';

    protected $fillable = [
        'user_id',
        'post_id',
        'image',
        'content',
        'likes'
    ];

    protected $dates=[
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(UserInfo::class, 'user_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
