<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ 'name', 'slug', 'body' ];

    public function Posts(){
    	
    	return $this->hasMany(Posts::class);
    }
}
