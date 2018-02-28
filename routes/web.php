<?php

Route::get('/', 'HomeController@show');

Route::post('/newToDo', 'HomeController@addTodo');

Route::get('/delete/{id}', 'HomeController@delete');

Route::get('/update/{id}', 'HomeController@update');

Route::post('/newToDoupdate/{id}', 'HomeController@updateTodo');

Route::get('/mark/{id}', 'HomeController@mark');
