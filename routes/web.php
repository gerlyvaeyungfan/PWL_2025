<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
/*
Route::get('/', [HomeController::class]);
Route::get('/about', [AboutController::class]);
Route::get('/article', [ArticleController::class]);
Route::resource('photos', PhotoController::class); */

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return ('Pos ke- '.$postId." Komentar ke-: ".$commentId);
});

Route::get('/article/{article}', function ($articleId) {
    return ('Halaman Artikel dengan ID : '.$articleId);
});

Route::get('/user/{name?}', function ($name='John') {
    return ('Nama saya '.$name);
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'NIM: 2341760195. [Nama: Gerly Vaeyungfan]';
});

Route::get('/article', function () {
    return ('Halaman Artikel');
});

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Gerly']);
// });

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Gerly Vaeyungfan']);
    });

Route::get('/greeting', [WelcomeController::class,
    'greeting'
]);