<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;

class OrdersController extends Controller
{
    public function checkoutpage(){
        $book = Book::all()->where('id', '2');

        $id = $book[1]->id;
        $name = $book[1]->title;

        return view('checkoutpage', [
            'id' => $id,
            'item' => $name,
            'price' => $book[1]->price
        ]);
    }
}
