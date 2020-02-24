<?php
namespace App\Model\user;

use Carbon\Carbon;
use App\Model\user\Tag;
use App\Model\user\Like;
use App\Model\user\Categorie;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  
    public function tags()
    {
       return $this->belongsToMany(Tag::class,'post_tags')->withTimestamps();
    }

    public function categories()
    {
      return  $this->belongsToMany(Categorie::class,'categorie_posts')->withTimestamps();
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }


    public function getCreatedAtAttribute($value)
    {
      return Carbon::parse($value)->diffForHumans();
    }

    public function likes()
    {
      return $this->hasMany('App\Model\user\Like');
    }

    public function getSlugAttribute($value)
    {
      return route('post',$value);
    }
}
