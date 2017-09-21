<?php

Auth::routes();

Route::get('/threads', 'ThreadsController@index');


Route::get('/threads/create', 'ThreadsController@create');

//Route::get('/threads/{id}', 'ThreadsController@show');

Route::get('/threads/1', 'ProfileController@index');
