<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function Books(){
        return $this->hasMany(Book::class,'user_id','id');
    }
}
