<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Image extends Model
{
    protected $table='images';
    public $timestamps=true;

    public function Book(){
        return $this->belongsTo(Book::class);
    }
}
