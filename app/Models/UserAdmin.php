<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserAdmin extends Model
{
    use HasFactory;

    protected $table = 'user_admin';
    public $timestamps = false;

    protected $fillable = [
        'username', 'email', 'password','phone','type','status','created_at','updated_at'
    ];



}
