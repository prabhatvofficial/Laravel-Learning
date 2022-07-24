<?php

use Illuminate\Support\Facades\Route;
//For routing we need to import the controller here
use App\Http\Controllers\UserController;

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
Route::view("/", "welcome");
// Route::view("/about", "about");

//Passing parameters in URL
// Route::get('/about/{name}/{id}', function($name, $id){
//    return view("about", ['name' => $name, 'id'=>$id]);
// });
// Route::get('/users', function(){
//    return view("users");
// });

//Route the controller
// Route::get("user", [UserController::class, 'show']);
//passing parameter in url
// Route::get("user/{id}", [UserController::class, 'show']);
// Route::get("users/{age}", [UserController::class, 'loadUserView']);

//Laravel 7 way:
// Route::get("user", 'UserController@show');

//Middleware

// Route::view('noaccess','noaccess');

//group middleware
// Route::group(['middleware'=>['protectedPage']], function(){
//    Route::view('users', 'users');
//    Route::view("/", "welcome");
// });

//group middleware
   // Route::view('users', 'users')->middleware('protectedPage');
   // Route::view("/", "welcome");

//Model and Database
   Route::get('users', [UserController::class, 'getData']);