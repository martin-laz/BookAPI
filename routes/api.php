<?php

use Illuminate\Http\Request;

Use App\Book;

Route::get('books', 'BookController@index');
Route::get('books/{book}', 'BookController@show');
Route::post('books', 'BookController@store');
Route::put('books/{book}', 'BookController@update');
Route::delete('books/{book}', 'BookController@delete');
