<?php

namespace App\Model\user;

use App\Model\user\Post;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function post()
    {
      return $this->belongsTo('App\Model\user\Post','like');
    }
}
