<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// instead of this get route to display the about page, we can use the view rout instead
    // Route::get('/about', function() {
    //     return view('about');
    // });
Route::view(uri: '/about', view:'about');

// this route will return a page that returns the number given into the url after product/ and returns it as dynamic string displayed on the page 
Route::get('/product/{id}', function (string $id) {
    return "Product ID=$id";
});