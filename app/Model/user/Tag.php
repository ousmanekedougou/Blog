<?php
use App\Model\user\Tag;
use App\Model\user\Post;
namespace App\Model\user;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
       return $this->belongsToMany(Post::class,'post_tags')->orderBy('created_at','desc')->paginate(5);
    }

    public function getRouteKeyName()
    {
      return 'slug';
    }
}
