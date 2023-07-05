<?php

use Illuminate\Support\Facades\Route;


// [TodoController::class,'index']
Route::get('/', 'TodoController@index');
Route::get('/create', 'TodoController@createView');
Route::post('/create', 'TodoController@store');
Route::patch('/completed/{id}', 'TodoController@markComplete');
Route::patch('/edit-name/{id}', 'TodoController@editName');
Route::get('/edit-name/{id}', 'TodoController@editNameView');
Route::delete('/delete/{id}', 'TodoController@delete');

