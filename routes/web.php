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
    'uses' => 'DataController@saveData'
]);

Route::get('/update-data', [
    'as' => 'update-data',
    'uses' => 'DataController@updatedata'
]);

Route::get('/delete-data', [
    'as' => 'delete-data',
    'uses' => 'DataController@deleteData'
]);

Route::get('/stock', [
    'as' => 'stock',
    'uses' => 'FoodBaby@stock'
]);

Route::get('/clothing', 'ClothingController@clothing');
Route::get('/clothing-admin', 'ClothingController@clothingadmin');
Route::get('clothing/{slug}', 'ClothingController@display');

Route::get('/updateadmin', [
    'as' => 'updateclothing',
    'uses' => 'ClothingController@stock'
]);
