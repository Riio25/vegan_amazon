<?php

namespace App\Http\Controllers;

use App\Model\Food;
use App\Model\FoodColor;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function show(){

        $post = Food::all();
        $colors = FoodColor::all();
        return view('foods', [
            'post' => $post,
            'colors' => $colors
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
