<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Bonjour le monde';
});
Route::get('/schnaps', function(){
    return view('schnaps');
});