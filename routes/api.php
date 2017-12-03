<?php

use Illuminate\Http\Request;

Route::get('issue/show/{id}', 'IssueController@show');
Route::post('issue/create', 'IssueController@create');

Route::post('register', 'Auth\RegisterController@register');
