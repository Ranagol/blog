<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentBelongsToUser(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function commentBelongsToPost(){
    	return $this->belongsTo(Post::class, 'post_id');
    }

    protected $guarded = [];
}
