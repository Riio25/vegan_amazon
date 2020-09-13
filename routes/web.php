<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodBaby;
use App\Clothing;
use App\clothing_category;


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

Route::get('/alt', function(){
    return view('alternate');
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
Route::get('/save-data-foods',[
    'as'=> 'save-data-foods',
    'uses'=> 'DataController@saveDataFood'
]);

Route::get('/update-data', [
    'as' => 'update-data',
    'uses' => 'DataController@updatedata'
]);
Route::get('/update-data-foods', [
    'as'=>'update-data-foods',
    'uses'=>'DataController@updateDataFood'
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

Route::get('/user', function(){
    $clothing = Clothing::all()->clothing_category;
    return $clothing;
});

Route::get('/foods', [
    'as' => 'post',
    'uses' => 'FoodController@show'
]);

Route::get('/category/{categoryName}', [
    'as'=> 'categoryName',
    'uses' =>'FoodController@showCategory']
);

Route::get('/books', [
    'as'=> 'books',
    'uses'=>'BooksController@show']
);

Route::get('/checkout', [
    'as' => 'checkout',
    'uses' => 'OrdersController@checkoutpage'
]);

Route::post('/place-order', [
    'as'=> 'place',
    'uses'=>'CheckoutController@placeOrder'
]);

Route::get('/order-confirmation/{ordernumber}', function($data){
    return view('order-confirmation',[
       'name'=>$data->name,
       'address'=>$data->address,
       'item'=>$data->item,
       'price'=>$data->price,
       'ordernumber'=>$data->ordernumber
    ]);
});
