<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $table = 'payments';
    public $timestamps = true;
    protected $fillable = array('payment_name', 'payment_account');

    public function subscriptions()
    {
        return $this->hasMany(Subscribe::class, 'payment_id');
    }

}
