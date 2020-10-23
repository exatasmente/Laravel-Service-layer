<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'api'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::patch('settings/profile', 'Settings\ProfileController@update');
    Route::patch('settings/password', 'Settings\PasswordController@update');
    Route::name('property.')->prefix('/property')->group(function(){
        Route::get('/','Property\ListProperties@handle');
        Route::get('/{id}','Property\GetProperty@handle');

        Route::post('/','Property\CreateProperty@handle');
        Route::post('/contract','Property\CreatePropertyContract@handle');

        Route::put('/{id}','Property\UpdateProperty@handle');
        Route::put('/{id}/contract','Property\UpdatePropertyContract@handle');

        Route::delete('/{id}','Property\DeleteProperty@handle')->where('id', '[0-9]+');;
        Route::delete('/{id}/contract','Property\DeletePropertyContract@handle');

    });

});
