<?php

Route::get('/roles','RoleController@index')->name('roles.index');

Route::post('/roles/store','RoleController@store')->name('roles.store');

Route::delete('/roles/{role}/destroy','RoleController@destroy')->name('roles.destroy');


Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');

Route::patch('/roles/{role}/update', 'RoleController@update')->name('roles.update');

