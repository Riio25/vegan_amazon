<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodBaby;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food-checkout', 'FoodBaby@checkout' );

Route::get('/food-category', 'FoodBaby@category');

Route::get('/post','postscontroller@show');
Route::get('/bt', 'FoodBaby@description');
Route::get('/bt', 'FoodBaby@stock');

Route::get('/save-data', [
    'as' => 'save-data',
    'uses' => 'savedata@saveData'
]);

Route::get('/update-data', [
    'as' => 'update-data',
    'uses' => 'savedata@updatedata'
]);

Route::get('/delete-data', [
    'as' => 'delete-data',
    'uses' => 'savedata@deleteData'
]);

Route::get('/stock', [
    'as' => 'stock',
    'uses' => 'FoodBaby@stock'
]);
