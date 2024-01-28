<?php

namespace App\Models;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    protected $table = 'invoices';
    public $timestamps = true;
    protected $fillable = array('project_id', 'invoice_name', 'price', 'descriptions');

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function photo()
    {
        return $this->morphOne(Photo::class,'photoable');
    }

}
