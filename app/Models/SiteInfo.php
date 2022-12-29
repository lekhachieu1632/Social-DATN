<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    protected $table = 'site_info';
    public $timestamps = false;

    protected $fillable = [
        'name', 'title', 'avatar','path','coppyright','favicon','content','description','created_at','updated_at'
    ];
}
