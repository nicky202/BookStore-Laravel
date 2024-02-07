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

//Route Books
Route::get('mybook', function () {
    return view('book.myBook');
});
Route::get('/books',[App\Http\Controllers\BooksController::class,'index']);
Route::get('/books/{id}', [App\Http\Controllers\BooksController::class, 'show'])->name('book.show');

//Route Auth
Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);
});
