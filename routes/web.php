<?php
  Route::get('/genres', 'GenresController@index');
  Route::get('/', 'GenresController@index');
  Route::get('/genres/{id}/edit', 'GenresController@edit');
  Route::post('/genres/{id}/store', 'GenresController@store');
  Route::get('/tracks', 'TracksController@index');
  Route::get('/tracks/new', 'TracksController@addTrack');
  Route::post('/tracks/store', 'TracksController@store');
