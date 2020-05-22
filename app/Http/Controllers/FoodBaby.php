<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBaby extends Controller
{
    public function checkout(){
        print_r('hello world');
    }

    public function category(){
        return view('food-category', ['name' => 'James']);
    }



}
