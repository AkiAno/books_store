<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['title', 'authors', 'image', 'genres_id', 'publisher_id'];

    public function genre(){
        return $this->belongsTo('App\Genre', 'genres_id');
    }

    public function bookshop(){
        return $this->belongsToMany('App\Bookshop');
    }
    public function publisher(){
        return $this->belongsTo('App\Publisher');
    }
}

