<?php

namespace App\Model\user;
use App\Model\user\Post;
use App\Model\user\Categorie;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function posts()
    {
      return  $this->belongsToMany(Post::class,'categorie_posts')->orderBy('created_at','desc')->paginate(5);
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }
}
