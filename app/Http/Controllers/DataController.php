<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Food;


class dataController extends Controller
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

    public function saveDataFood(Request $request){
        $product = $request->input('item');
        $product_category = $request->input('category');
        $product_color = $request->input('color');
        $product_price = $request->input('price');

        $data = array('category' => $product_category, 'color'=>$product_color, 'item'=>$product, 'price'=>$product_price);

        Food::Insert($data);
        return view('test', [
            'value' => 'created successfully'
        ]);
    }

    public function updateDataFood(Request $request){
        $product = $request->input('update');
        $product_category = $request->input('category');
        $product_color = $request->input('color');
        $product_price = $request->input('price');

        $data = array('category' => $product_category, 'color'=>$product_color, 'item'=>$product, 'price'=>$product_price);
        Food::where('item', $product)->update($data);

        return view('test',[
            'value'=>'updated successfully'
        ]);
    }


}
