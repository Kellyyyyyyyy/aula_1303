<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('/categories','CategoryController');


//Route:: método_HTTP('url', 'controller@metodo');