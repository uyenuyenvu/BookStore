<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Book extends Model
{
//    protected $table='books';
//    public $timestamps=true;

    public function Images(){
        return $this->hasMany(Image::class,'parent_id','id');
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function orders(){
        $this->belongsToMany(Order::class);
    }
};
