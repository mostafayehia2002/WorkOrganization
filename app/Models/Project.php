<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = array('user_id', 'name', 'details', 'costs', 'owner_name', 'owner_phone', 'owner_address', 'start_at', 'end-at', 'photo_id', 'status');

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'project_id');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class,'photoable');
    }

    public function photo()
    {
        return $this->morphOne(Photo::class,'photoable');
    }
}
