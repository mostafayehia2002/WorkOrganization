<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password');

    public function photo()
    {
        return $this->morphOne(Photo::class,'photoable');
    }
}
