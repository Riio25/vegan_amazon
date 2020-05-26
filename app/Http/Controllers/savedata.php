<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class savedata extends Controller
{

    public function saveData(Request $request){
        $product_name = $request->input('itsfruit');
        $price = $request->input('price');
        $product_description = $request->input('description');

        $data = array('product_name'=>$product_name, 'price' => $price, 'product_description'=>$product_description);

        DB::table('food_category')->insert($data);

        return view('test');
    }
}
