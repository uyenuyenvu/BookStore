<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Oder extends Model
{
    use SoftDeletes;
    public function Books(){
        return $this->belongsToMany(Book::class);
    }
}
