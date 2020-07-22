<?php

Route::get('/roles','RoleController@index')->name('roles.index');

Route::post('/roles/store','RoleController@store')->name('roles.store');

Route::delete('/roles/{role}/destroy','RoleController@destroy')->name('roles.destroy');


Route::get('/roles/{role}/edit', 'RoleController@edit')->name('roles.edit');

Route::patch('/roles/{role}/update', 'RoleController@update')->name('roles.update');


Route::patch('/roles/{role}/attach', 'RoleController@attachPermission')->name('roles.permission.attach');

Route::patch('/roles/{role}/detach', 'RoleController@detachPermission')->name('roles.permission.detach');



