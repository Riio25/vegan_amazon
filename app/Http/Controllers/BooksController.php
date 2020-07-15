<?php

namespace App\Http\Controllers;

use App\book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show(){
        $books = book::all();
//        $authors = author::all();
//        $genres = book::genres();

        return view('books', [
            'book' => $books
//            'author' => $authors,
//            'genres' => $genres
        ]);
    }
}
