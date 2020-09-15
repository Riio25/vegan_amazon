<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{

    public function show(){

        return view('admin-home');
    }
}
