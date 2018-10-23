<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['title', 'authors', 'image'];

    public function genre(){
        return $this->belongsTo('App\Genre', 'genres_id');
    }

    public function bookshop(){
        return $this->hasMany('App\Bookshop');
    }
}

