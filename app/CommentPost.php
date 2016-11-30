<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPost extends Model
{
    protected $table ='comment_posts';
    protected $fillable = ['description','user_id','post_id'];
    public function post(){
        return $this->belongsTo('\App\Post');
    }
    public function usercomment(){
        return $this->belongsTo('\App\User','user_id','id');
    }
    

    //
}
