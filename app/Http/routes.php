<?php

#General
Route::get('/', ['as' => 'home', 'uses' => 'GeneralController@showHome']);
Route::get('about', ['as' => 'about', 'uses' => 'GeneralController@showAbout']);
Route::get('projects', 'GeneralController@showProjects');
Route::get('contact', ['as' => 'contact', 'uses' => 'GeneralController@showContact']);
Route::post('contact', 'GeneralController@submitContactForm');