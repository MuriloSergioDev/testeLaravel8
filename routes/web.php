<?php

use Illuminate\Support\Facades\Route;


Route::get('/', ['as' => 'home', function () {
    return view('site.pages.home.index');
}]);

Route::get('/services', ['as' => 'services', function () {
    return view('site.pages.services.index');
}]);

Route::get('/help', ['as' => 'help', function () {
    return view('site.pages.help.index');
}]);

Route::get('/about', ['as' => 'about', function () {
    return view('site.pages.about.index');
}]);

Route::get('/contact', ['as' => 'contact', function () {
    return view('site.pages.contact.index');
}]);
