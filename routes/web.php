<?php

Route::group(['prefix' => 'api/'], function() {
    Route::resource('patientsticker', 'PatientStickerController');
    Route::resource('patientstickeremer', 'PatientStickerEmerController');
    Route::resource('printsticker', 'PatientStickerPrintController');
});


Route::get('/{any}', function(){
    return view('welcome');
})->where('any', '.*');


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
