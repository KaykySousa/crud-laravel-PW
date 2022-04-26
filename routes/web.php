<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('start');
});

Route::post('/register-product', function(Request $request) {

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity
    ]);

    echo "Created product";
});

Route::get('/list-product/{id}', function($id) {
    $product = Product::find($id);
    return view('list', ['product' => $product]);
});

Route::get('/edit-product/{id}', function($id){
    $product = Product::find($id);
    return view('edit', ['product' => $product]);
});

Route::post('/edit-product/{id}', function(Request $request, $id) {
    $product = Product::find($id);

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity
    ]);

    echo "Edited product";
});

Route::get('/delete-product/{id}', function($id){
    $product = Product::find($id);
    $product->delete();

    echo "Deleted product";
});