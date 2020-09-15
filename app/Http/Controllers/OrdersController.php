<?php

namespace App\Http\Controllers;

use App\Model\Order;
use Illuminate\Http\Request;
use App\Model\Book;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    public function checkoutpage($id){
        $book = Book::all()->where('id', $id)->first();

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

    public function showOrderHistory(){

        $orders = Order::orderBy('created_at', 'DESC')->get();
        $count = $orders->count();

        return view('admin-order-history', [
            'orders' => $orders,
            'count' => $count
        ]);
    }

    public function showDetails($ordernumber){

        $order = Order::where('ordernumber', $ordernumber)->first();

        return view('admin-order-details', [
            'order'=>$order
        ]);
    }

    public function cancelOrder(Request $request){


        $order = Order::find($request->orderid);
        $order->status = 'Cancelled';
        $order->save();

        return response()->json($order);
    }
}
