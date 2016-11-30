<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
     protected $table='posts';
     protected $fillable=['description','user_id'];
     
     
     public function staruser(){
          return $this->belonsToMany('\App\User');   
     }
     
     public function comments(){
          return $this->hasMany('\App\CommentPost');
     }
    //
}
