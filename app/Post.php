<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
     protected $table='posts';
     protected $fillable=['description','user_id'];
     
     
     public function staruser(){
          return $this->belongsToMany('\App\User');   
     }
     
     
     
     public function comments(){
          return $this->hasMany('\App\CommentPost');
     }
     public function userpost(){
          return $this->belongsTo('\App\User','user_id','id');
          
     }
    //
}
