<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'group_id',
        'name',
        'path',
        'name_image',
        'status',
        'link',
        'target',
        'created_at',
        'updated_at',
    ];
}
