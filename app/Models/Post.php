<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\FeaturedImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function comments(){
      return $this->hasMany(Comment::class);
    }
    public function featuredImage(){
      return $this->hasOne(FeaturedImage::class);
    }
}
