<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingPageController@index')->name('landing');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('company', 'CompanyDetailsController');
    Route::resource('portfolios', 'PortfoliosController');
});