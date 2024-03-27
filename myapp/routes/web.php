<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleArtisanController;
use App\Http\Controllers\ResourceController;

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


// Route Parameter

// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null , string $comment = null) {
// if($id){
//     return "<h1> Post ID : " . $id . "</h1><h2>". $comment . "</h2>";
// }else{
//     return "<h1> No ID Found </h1>";

// }
// });

// Route::get('/post/{id?}', function (string $id ) {
//     if($id){
//         return "<h1> Post ID : " . $id . "</h1>";
//     }else{
//         return "<h1> No ID Found </h1>";
    
//     }
//     })->whereAlphaNumeric('id');



// Route::get('/post/{id?}', function (string $id ) {
//     if($id){
//         return "<h1> Post ID : " . $id . "</h1>";
//     }else{
//         return "<h1> No ID Found </h1>";
    
//     }
//     })->whereIn('id',['movie','song','painting']);

// ->where('id','[0-9]+')
// ->where('id','[a-zA-Z]+')
// ->where('id','[0-9]+')->whereAlpha('commentid');


// Route::view('/post','post');

// Route::get('/post/firstpost',function(){
//     return view('firstpost');
// });


// Name route

Route::get('/about',function(){
    return view('about');
});
Route::get('/postsss',function(){
    return view('post');
})->name('mypost');

Route::redirect('/about','/post');


// Route::get('/{name?}',function($name = null){
//     $demo = "<h2>Saksham</h2>";
//     $data = compact('name','demo');
//     return view('home')->with($data);
// });


Route::get('/slide',function(){
    return view('welcome');
});

Route::get('/',[DemoController::class,'index']);

Route::get('/about','App\Http\Controllers\DemoController@about');

Route::get('/post',SingleArtisanController::class);
Route::resource('/res',ResourceController::class);