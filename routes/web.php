<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('home_page');
});

Route::get('/item',function(){
    return view('item_page');
});
Route::get('/picture',function(){
    return view('picture_page');
});