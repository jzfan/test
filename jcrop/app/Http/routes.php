<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail/queue', function(){
	\Mail::later(5, 'emails.queued', ['name'=>'smith'], function($m){
		$m->to('195545658@qq.com', 'fxinhu')->subject('queueTest');
	});
	return 'The email has sent.';
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

	Route::post('/crop/upload', 'CropController@upload');
Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix'=>'crop'], function(){
	Route::get('/', 'CropController@index');
});
});
