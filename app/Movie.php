<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image', 
        'description', 
        'duration', 
        'launching', 
        'trailer', 
        'size', 
        'format', 
        'quality',
        'urldownload', 
        'director_id', 
        'country_id', 
        'gender_id'
    ];

    public function gender(){
        return $this->belongsTo('App\Gender');
    }
    public function country(){
        return $this->belongsTo('App\Country');
    }
    public function director(){
        return $this->belongsTo('App\Director');
    }
    public function scopeMovie($query, $movie){
        $query->where('name', 'LIKE','%'.$movie.'%');
    }
    public function scopeGender($query, $gender){
        
    }
}
