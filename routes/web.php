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

Route::get('/', function() {
    return view('home');
});

Route::get('/register-product', function () {
    return view('register');
});

Route::post('/register-product', function(Request $request) {

    Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity
    ]);

    return redirect('/');
});

Route::get('/list-product/{id}', function($id) {
    $product = Product::find($id);
    return view('list', ['product' => $product]);
});

Route::get('/list-products', function() {
    $products = Product::all();
    return view('listall', ['products' => $products]);
});

Route::get('/edit-product', function(){
    $products = Product::all();
    return view('editlist', ['products' => $products]);
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

    return redirect('/');
});

Route::get('/delete-product', function(){
    $products = Product::all();
    return view('delete', ['products' => $products]);
});

Route::get('/delete-product/{id}', function($id){
    $product = Product::find($id);
    $product->delete();

    return redirect('/');
});