<?php
  Route::get('/', 'LoginController@index');
  Route::get('/login', 'LoginController@index');
  Route::post('/login', 'LoginController@login');
  Route::get('/logout', 'LoginController@logout');
  Route::get('/docs', 'DocsController@index');

  Route::get('/maintenance', 'MaintenanceController@index');

  Route::middleware(['maintenance'])->group(function(){
    Route::get('/genres', 'GenresController@index');
    Route::get('/genres/{id}/edit', 'GenresController@edit');
    Route::post('/genres/{id}/store', 'GenresController@store');
    Route::get('/tracks', 'TracksController@index');
    Route::get('/tracks/new', 'TracksController@addTrack');
    Route::post('/tracks/store', 'TracksController@store');
    Route::get('/signup', 'SignUpController@index');
    Route::post('/signup', 'SignUpController@signup');
  });

  Route::middleware(['authenticated'])->group(function(){
    Route::get('/profile', 'AdminController@index');
    Route::get('/settings', 'SettingController@index');
    Route::post('/settings/update', 'SettingController@update');
  });
