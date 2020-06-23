<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{
    public function clothing_category(){
        return $this->hasOne(clothing_category::class);
    }
}
