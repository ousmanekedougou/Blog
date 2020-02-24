<?php

namespace App\Http\Controllers\User;

use App\Model\user\Like;
use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function post( Post $post)
    {
        return view('user.post',compact('post'));
    }

    public function getAllPost()
    {
      return  $posts = Post::with('likes')->where('status',1)->orderBy('id','desc')->orderBy('created_at','desc')->paginate(5);
    }

    public function saveLike(Request $request)
    {
        $likecheck = Like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->first();
        if($likecheck)
        {
            Like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->delete();
            return 'deleted';
        }
        else
        {

            $like = new Like;
            $like->user_id = Auth::id();
            $like->post_id = $request->id;
            $like->save();
        }
    }
}
