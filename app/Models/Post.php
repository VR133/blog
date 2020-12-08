<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function images(){
        return $this->hasMany(Images::class);
    }
    public function tags(){
        return $this->belongsToMany(Tags::class);
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
