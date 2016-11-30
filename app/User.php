<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname','lastname','name','birthday','age','profile_url','fron_url', 'email', 'password',
    ];
    
    
    public function courses(){
        return $this->hasMany('\App\Course');
    }
    
    public function suscriptions(){
        return $this->belonsToMany('\App\Course','suscriptions');
    }
    
    public function starposts(){
        return $this->belonsToMany('\App\Post','star_posts');
    }
    
    public function messages(){
        return $this->belonsToMany('\App\User','users','user_from','user_to');
    }
    public function commentaries(){
        return $this->hasMany('\App\CommentPost');
    }
    
    
    
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
