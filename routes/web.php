<?php

use App\Skill;

Route::get('/', 'SkillController@index');

Route::get('/skills/{skill}', 'SkillController@show');


//posts

Route::get('posts/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');
Route::post('posts/', 'PostController@store');

Route::get('posts/{post}', 'PostController@show');

Route::get('posts/{post}/edit', 'PostController@edit');
Route::post('posts/update/{post}', 'PostController@update');


Route::get('posts/{post}/delete', 'PostController@destroy');




