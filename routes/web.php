<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingPageController@index')->name('landing');

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('company', 'CompanyDetailsController');
    Route::resource('portfolios', 'PortfoliosController');
    Route::resource('services', 'ServicesController');
    Route::get('users-edit-password', 'UsersController@editPassword')->name('users.edit-password');
    Route::patch('users-update-password/{user}', 'UsersController@updatePassword')->name('users.update-password');
});