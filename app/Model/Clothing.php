<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clothing extends Model
{
    public function clothing_category(){
        return $this->belongsTo(clothing_category::class);
    }
}
