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
Route::get('/todos',['uses' => 'todospagecontroller@index', 'as'=>'homepagee']);
//NOTIce THE POST in the ROUTE not get
Route::post('/create/todos',['uses' => 'todospagecontroller@store']);

Route::get('/todo/delete/{id3}',['uses'=>
	'todospagecontroller@deleter', 'as'=>'tododeleter'
]);

Route::get('/todo/update/{id4}',['uses'=>
	'todospagecontroller@updater', 'as'=>'todoupdater'
]);
Route::post('todo/saveupdate/{id}',['uses'=>'todospagecontroller@saveupdate', 'as'=>'updatesaver']);
Route::get('todo/completed/{id}',['uses'=>'todospagecontroller@completer','as'=>'completed']);


//testing
Route::get('/test',['uses'=>'homepagecontroller@homepage','as'=>'homepage-route','as'=>'test']);
Route::post('/test/adding',['uses'=>'homepagecontroller@adding']);
Route::get('/test/delete/{id}',['uses'=>'homepagecontroller@deleter','as'=>'deleter']);
Route::get('/test/update/{id}',['uses'=>'homepagecontroller@update','as'=>'updater']);
Route::post('/test/saveupdate/{id}',['uses'=>'homepagecontroller@saveupdate','as'=>'saveupdate']);