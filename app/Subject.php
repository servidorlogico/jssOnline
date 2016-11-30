<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table ='subjects';
    protected $fillable=['name','description','video_url','stars','course_id'];
    
    //
}
