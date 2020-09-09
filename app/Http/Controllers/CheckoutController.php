<?php

namespace App\Http\Controllers;

use App\Model\Book;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function placeOrder(Request $request){

        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'streetAddress' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'CCNumber' => 'required'
        ]);

        $name = $request->firstName;
        $address = $request->streetAddress . ', ' . $request->city . ', ' . $request->state . ', ' . $request->zip;
//        $item = DB::table('books')->where('id', $request->item)->first();
        $item = Book::where('id', $request->item)->first();
        $itemTitle = $item->title;

        $ordernum = $this->createNextOrderNumber();

        $orders = new Order;
        $orders->ordernumber = $ordernum;
        $orders->first_name = $request->firstName;
        $orders->last_name = $request->lastName;
        $orders->product_name = $itemTitle;
        $orders->shipping_address = $address;
        $orders->status = 'New';
        $orders->save();

        return view('order-confirmation',[
            'name' => $name,
            'address' => $address,
            'item' => $itemTitle,
            'ordernumber' => $ordernum
        ]);
    }

    private function createNextOrderNumber(){

        $statement = DB::select("SHOW TABLE STATUS LIKE 'orders'");

        $nextID = $statement[0]->Auto_increment;
        $digits = 6;
        $ordernum = ($nextID + 1000000) . rand(pow(10, $digits-1), pow(10, $digits)-1);

        return $ordernum;

    }
}
