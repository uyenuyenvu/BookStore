<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Books(){
        return $this->belongsToMany(Book::class);
    }
}
