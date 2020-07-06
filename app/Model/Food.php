<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function foodcolor(){
        return $this->hasOne(FoodColor::class);
    }
}
