<?php

namespace App\Http\Controllers;

use App\Model\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show(){
        $books = Book::all();


        return view('books', [
            'books' => $books

        ]);
    }
}
