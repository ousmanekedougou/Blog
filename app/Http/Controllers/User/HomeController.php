<?php

namespace App\Http\Controllers\User;

use App\Model\user\Tag;
use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Model\user\Categorie;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('status',1)->orderBy('id','desc')->orderBy('created_at','desc')->paginate(5);
        return view('user.blog',compact('posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts();
        return view('user.blog',compact('posts'));
    }

    public function category(Categorie $category)
    {
        $posts = $category->posts();
        return view('user.blog',compact('posts'));
    }
    
}
