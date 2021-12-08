<?php

use App\PostCard;
use App\PostCardSendingService;
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

Route::get('/post-card', function(){
    $postCardSendingServices = new PostCardSendingService("uSA", 4, 6);
    $postCardSendingServices->hello("hello from cambodia", "test@gmail.com");
});

Route::get('facades', function(){
    PostCard::Hello("hello", "world"); 
});
