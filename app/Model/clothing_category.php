<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clothing_category extends Model
{
    public function clothing(){
        return $this->hasOne(Clothing::class);
    }
}
