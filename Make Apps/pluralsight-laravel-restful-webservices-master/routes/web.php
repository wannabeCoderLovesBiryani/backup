<?php
/*
Route groups allow you to share route attributes, such as middleware, across a large number of routes without needing to define those attributes on each individual route.
*/

Route::group(['prefix' => 'api/v1'], function () {
    Route::resource('meeting', 'MeetingController', [
        'except' => ['edit', 'create']
    ]);

    Route::resource('meeting/registration', 'RegistrationController', [
        'only' => ['store', 'destroy']
    ]);

    Route::post('user', [
        'uses' => 'AuthController@store'
    ]);

    Route::post('user/signin', [
        'uses' => 'AuthController@signin'
    ]);
});