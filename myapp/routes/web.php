<?php

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
    return view('welcome');
});

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



Route::get('/post/{id?}', function (string $id ) {
    if($id){
        return "<h1> Post ID : " . $id . "</h1>";
    }else{
        return "<h1> No ID Found </h1>";
    
    }
    })->whereIn('id',['movie','song','painting']);

// ->where('id','[0-9]+')
// ->where('id','[a-zA-Z]+')
// ->where('id','[0-9]+')->whereAlpha('commentid');


// Route::view('/post','post');

// Route::get('/post/firstpost',function(){
//     return view('firstpost');
// });