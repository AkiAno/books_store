<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookshop extends Model
{
    //
    protected $fillable = ['name', 'lat', 'long'];

    public function book(){
        return $this->belongsToMany('App\Book');
    }
}
