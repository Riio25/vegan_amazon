<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author(){
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
    public function genre(){
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }
}
