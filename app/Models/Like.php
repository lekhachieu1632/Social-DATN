<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'like';

    protected $fillable = [
        'user_id',
        'post_id',
        'comment_id',
    ];

    protected $dates=[
        'created_at',
        'updated_at',
    ];
}
