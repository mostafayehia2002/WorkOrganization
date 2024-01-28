<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $table = 'feedbacks';
    public $timestamps = true;
    protected $fillable = array('user_id', 'rate', 'comment');

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
