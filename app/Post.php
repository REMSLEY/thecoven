<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   public function tags(){
       return $this->belongsToMany('App\Tag');
   }
  
}
