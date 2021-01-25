<?php

use Illuminate\Support\Facades\Route;

Route::get('/','StaticPagesController@root');
Route::resource('bdatas', 'BdataController');
Route::get('bdatas_down','BdataController@export')->name('bdatas_down');
Route::get('get_bdatas/paginate','BdataController@getBdatasPaginate')->name('get_bdatas_paginate');

