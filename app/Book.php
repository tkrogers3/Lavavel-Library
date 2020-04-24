<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function path (){
        return route('books.show', $this);
    }
    public function authors (){
        return $this->belongsToMany(Author::class);
    }
}
