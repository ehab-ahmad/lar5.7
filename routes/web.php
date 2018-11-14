<?php

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

Route::get('/new',['uses' => 'pagecontroller@myfunc1']);
Route::get('/todos',['uses' => 'todospagecontroller@index']);
//NOTIce THE POST in the ROUTE not get
Route::post('/create/todos',['uses' => 'todospagecontroller@store']);

Route::get('/todo/delete/{id3}',['uses'=>
	'todospagecontroller@deleter', 'as'=>'tododeleter'
]);
