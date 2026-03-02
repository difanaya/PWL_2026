<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

//Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);


Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);
Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
   return 'World';
});

// Route::get('/about', function () {
//    return 'NIM: 244107020213<br>
//            Nama: Difa Naya Sari Pasha';
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

