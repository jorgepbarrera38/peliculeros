<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [ 'name', 'slug' ];

    public function movies(){
        return $this->hasMany('App\Movie');
    }
}
