<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{

    protected $table = 'subscribe_requests';
    public $timestamps = true;
    protected $fillable = array('user_id', 'payment_id', 'subscribe_type', 'payment_photo', 'price', 'status');

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function photo()
    {
        return $this->morphOne(Photo::class,'photoable');
    }
}
