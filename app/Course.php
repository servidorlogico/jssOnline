<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    protected $fillable=['name','description','image_url','start_date','stars','user_id'];
    
    
    public function user(){
        return $this->belongsTo('\App\User');
    }
    public function suscriptors(){
        return $this->belonsToMany('\App\User');
    }
    //
}
