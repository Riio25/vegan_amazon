<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function show(){

        $post = Food::all();
        return view('foods', [
            'post' => $post
        ]);
    }

    public function showCategory($category){
        // if $category = green, category should be vegetable, fruit. item should be spinach and pear.
        $post = Food::where('category', $category);
        print_r($post);
        return view('food-show-category',[
            'post' => $post,
            'categoryName' => $category
        ]);
    }
}
