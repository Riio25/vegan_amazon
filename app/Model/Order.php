<?php

namespace App;

use App\Model\Book;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function books(){
        return $this->hasMany(Book::class);
    }
}
