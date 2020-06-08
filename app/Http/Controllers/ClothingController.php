<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothing;
use Illuminate\Support\Facades\DB;

class ClothingController extends Controller
{
    public function clothing(){
        return view('clothing');
    }
    public function clothingadmin(){
        return view('clothing-admin');
    }
    public function display($slug){
        return view('clothing', [
            'slug' => $slug]);
    }

    public function stock(Request $request){
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('category');



        DB::table('clothing')->updateOrInsert(
            ['description' => $description],
            ['price' => $price, 'category' => $category]
        );
        return view('clothing-admin',[
            'value' => 'completed'
        ]);
    }
}
