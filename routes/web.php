<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


Auth::routes();
Route::get('/','HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homesearch', 'HomeController@homesearch')->name('homesearch'); // Home page search
Route::get('/admin', 'AdminsController@index')->name('admin.index');
Route::get('/post/{post}', 'PostController@show')->name('post');

Route::middleware('auth')->group(function(){
    Route::get('/admin','AdminsController@index')->name('admin.index');
    Route::post('/admin/posts','PostController@store')->name('post.store');
    Route::get('/admin/posts/create','PostController@create')->name('post.create');
    Route::get('/admin/posts','PostController@index')->name('post.index');

   // Route::get('/admin/posts/userindex','AdminsController@userindex')->name('post.userindex');
    //Route::get('/admin/posts/{user}/edit','AdminsController@useredit')->name('post.useredit'); the url ends up going to the same place as the normal edit, change its url




    Route::delete('/admin/posts/{post}/destroy', 'PostController@destroy')->name('post.destroy');
    Route::patch('/admin/posts/{post}/update', 'PostController@update')->name('post.update');
    Route::get('/admin/posts/{post}/edit', 'PostController@edit')->middleware('can:view,post')->name('post.edit');



    Route::put('/admin/users/{user}/update','UserController@update')->name('user.profile.update');


    Route::delete('admin/users/{user}/destroy','UserController@destroy')->name('user.destroy');

//    bind the post class using {}




    Route::get('send-mail', function () {
        $registermessage=['title'=>'Thanks for registering at GiveForGood!','content'=>'We hope you enjoy using our service.'];
//        Mail::send('emails.register', $registermessage, function($message){
//            $message->to('ch2shahid@gmail.com','New User')->subject('Hello, How are you');
//        });
        Mail::to('ch2shahid@gmail.com')->send(new \App\Mail\RegisterMail($registermessage));


    });


});
// use lowercase admin only, see lecture 222
Route::middleware(['role:Admin','auth'])->group(function(){
Route::get('admin/users','UserController@index')->name('users.index');
    Route::get('/admin/users/{user}/profile','UserController@show')->name('user.profile.show');

    Route::put('/users/{user}/attach', 'UserController@attach')->name('user.role.attach');
    Route::put('/users/{user}/detach', 'UserController@detach')->name('user.role.detach');

});

Route::middleware(['role:admin'])->group(function(){

});


