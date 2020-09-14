<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function checkoutpage(){
        $book = Book::all()->where('id', '15')->first();



        $id = $book->id;
        $name = $book->title;

        return view('checkoutpage', [
            'id' => $id,
            'item' => $name,
            'price' => $book->price
        ]);
    }

    public function orderConfirmation($ordernumber){
        $order = DB::table('orders')->where('ordernumber', $ordernumber)->first();

        return view('order-confirmation',[
            'name'=>$order->first_name,
            'address'=>$order->shipping_address,
            'item'=>$order->product_name,
            'price'=>$order->total_paid,
            'ordernumber'=>$order->ordernumber
        ]);
    }
}
