<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request){

        $name = $request->firstName;
        $address = $request->streetAddress . ', ' . $request->city . ', ' . $request->state . ', ' . $request->zip;
        $item = $request->item;

        return view('order-confirmation',[
            'name' => $name,
            'address' => $address,
            'item' => $item
        ]);
    }
}
