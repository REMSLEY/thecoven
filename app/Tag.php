<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tag_types';
   
    
    public function tags(){
        return $this->belongsToMany('App\Post', 'tags', 'tag_type_id');
    }
}
