<?php

namespace App;
use App\User;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postBelongsToUser(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function postHasManyComments(){
    	return $this->hasMany(Comment::class, 'post_id');
    }

    protected $guarded = [];
}
