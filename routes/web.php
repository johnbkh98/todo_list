<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TodoController@index');
Route::get('/create', 'TodoController@createView');
Route::get('/edit-name/{id}', 'TodoController@editNameView');
Route::get('/add-item/{id}', 'TodoController@addItemView');
Route::get('/add-item/{id}', 'TodoController@addItemView');
Route::get('/view-items/{id}', 'TodoController@todoItemsView');

Route::post('/create', 'TodoController@store');
Route::post('/add-item{id}', 'TodoController@addItem');
Route::patch('/completed/{id}', 'TodoController@markComplete');
Route::patch('/edit-name/{id}', 'TodoController@editName');
Route::delete('/delete/{id}', 'TodoController@delete');
Route::delete('/delete-item/{id}', 'TodoController@deleteItem');

