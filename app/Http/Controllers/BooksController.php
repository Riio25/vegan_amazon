<?php

namespace App\Http\Controllers;

use App\Model\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show(){
        $books = Book::all();
//        $authors = author::all();
//        $genres = book::genres();

        return view('books', [
            'books' => $books
//            'author' => $authors,
//            'genres' => $genres
        ]);
    }
}
