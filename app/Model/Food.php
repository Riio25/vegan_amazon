<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function foodcolor(){
        return $this->hasOne(FoodColor::class, 'id', 'color_id');
    }
}
