<?php

Auth::routes();

Route::get('/threads', 'ThreadsController@index');


Route::get('/threads/create', function() {
	return view('threads.create');
});

Route::get('/threads/{id}', 'ThreadsController@show');
