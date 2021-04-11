<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UploadController;

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

Route::get('home/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');



Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/post/create', function () {
    DB::table('posts')->insert([
         'title' => 'My title',
         'body' => 'My body'
    ]);
});

Route::get('/post', [BlogController::class, 'index']);

Route::get('post/create', function(){
    return view('blog.create');
});

Route::post('post/create', [BlogController::class,'store'])->name('add-blog');

Route::get('post/{id}', [BlogController::class, 'get_post']); 

Route::get('mail/send',[MailController::class,'send'])->name('mailing');

Route::get('/person',[UploadController::class,'index']);

Route::get('/person/upload',[UploadController::class,'uploadForm'])->name('upload');
Route::post('/person/upload',[UploadController::class,'uploadSubmit']);

Route::get(' /{lang}/about', function($lang){
    App::setlocale($lang);
    return view('about');
});
Route::get(' /{lang}/portfolio', function($lang){
    App::setlocale($lang);
    return view('portfolio');
});
Route::get(' {lang}/contact', function($lang){
    App::setlocale($lang);
    return view('contact');
});
Route::get(' /', function(){
    
    return view('welcome');
    
});
Route::get(' {lang}/home', function($lang){
    App::setlocale($lang);
    return view('home');
    
});
