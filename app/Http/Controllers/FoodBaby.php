<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodBaby extends Controller
{
    public function checkout(){
        print_r('hello world');
    }

    public function category($slug){
        print_r('hello');
        $post = \DB::table('food_category')->where('slug', $slug)->first();
        dd($post);

        return view('food_category', [
            'post' => $post->product_name
        ]);
    }

    public function description(){
        $post = \DB::table('food_category')->where('id', 1)->first();

        return view('food-category', [
            'post' => $post->product_name,
            'description' => $post->product_description
        ]);
    }



}
