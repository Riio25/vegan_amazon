<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function authors(){
        return $this->hasOne(author::class);
    }
    public function genres(){
        return $this->hasOne(genre::class);
    }
}
