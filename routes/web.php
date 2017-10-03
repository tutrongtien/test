<?php
use Furbook\Cat;
use Furbook\Breed;
use Illuminate\Support\Facades\Input;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', function(){
// 	echo 'Hello';
// });
// Route::get('/test', function(){
// 	echo 'test';
// });
// Route::get('/', function() {
// 	return "All cats";
// });
// Route::get('/cats/{id}', function($id) {
// 	return $id;
// });
// Route::get('/cats/{name}', function($name) {
// 	echo "my name is" .$name;
// });
// Route::get('/about', function() {
// 	return view('about');
// });
// Route::get('/cats', function() {
// 	$cats = Furbook\cat::all();
// 	return view('cat.index');
// });
// Route::get('/cats/breeds/{name}', function($name) {
// 	$breed = Furbook\Breed::with('cats');
// 	->where('name');
// });

Route::get('/', 'CatController@home');
Route::get('/cats', 'CatController@getCats');
Route::get('/cats/breeds/{name}', 'CatController@view');
Route::get('/about', 'CatController@about');
// load form create
Route::get('cats/create', 'CatController@create');
// push data to server
Route::post('cats', 'CatController@save');
Route::get('cats/{cat}/edit', 'CatController@edit');
Route::put('cats/{cat}', 'CatController@update');
Route::get('/cats/{cat}', 'CatController@show');
Route::get('cats/{cat}/delete', 'CatController@delete');