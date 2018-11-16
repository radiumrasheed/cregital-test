<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::get('/passports/{file_name}', function ($file_name) {

    return response()->file(public_path('uploads/passports/' . $file_name));

});

Route::get('command/{command}', function ($command) {

    /* php artisan any_command */
    $response = \Artisan::call($command);

    return response()->json($response);
});