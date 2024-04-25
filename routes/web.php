<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('arabe',function(){
    return "estas con el arabe";
});
Route::view('AMED','arabe');

Route::get('RONALDO',function(){
    return "estas con el arabe";
});
Route::view('hola','RONALDO');

Route::get('MADRID',function(){
    return 'halamadrid';
});
Route::view('cr7','MADRID');
Route::get('lamborgini',function(){
    return 'hola';
});

route::view('free','lamborgini');

Route::get('menu',function(){
    return view('menu');
})->name('menu');

route::view('yordi','menu');

Route::get('OBJETIVO', function(){
    return 'hola';
});
route::view('anyelo','OBJETIBO');