<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;


class savedata extends Controller
{

    public function saveData(Request $request){
        $product_name = $request->input('itsfruit');
        $price = $request->input('price');
        $product_description = $request->input('description');

        $data = array('product_name'=>$product_name, 'price' => $price, 'product_description'=>$product_description);

        Food::insert($data);

        return view('test',[
            'value' => 'entered successfully'
        ]);
    }

    public function deleteData(Request $request){
        $product_name = $request->input('deleted');
        Food::where('product_name', $product_name)->delete();

        return view('test', [
            'value' => 'deleted successfully'
        ]);

    }

    public function updateData(Request $request){
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $description = $request->input('description');

       $data = [
           'product_name' => $product_name,
           'price' => $price,
           'product_description' => $description
       ];
        Food::where('product_name', $product_name)->update($data);

        return view('test', [
            'value' => 'updated successfully'
        ]);
    }


}
