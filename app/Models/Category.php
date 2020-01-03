<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Books(){
        return $this->hasMany(Book::class,'category_id','id');
    }
}
