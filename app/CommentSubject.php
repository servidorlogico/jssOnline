<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentSubject extends Model
{
    protected $table = 'comment_subjects';
    protected $fillable=['description','subject_id','user_id'];
    //
}
