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

Route::get('/products', function () {
    return response()->json(
        [
            "message" => "GET Method Succes"
        ]
    );
});

Route::post('/product', function () {
    return response()->json(
        [
            "message" => "POST Method Succes"
        ]
    );
});

Route::put('/product/{id}', function ($id) {
    return response()->json(
        [
            "message" => "PUT Method Succes" . $id
        ]
    );
});

Route::delete('/product/{id}', function ($id) {
    return response()->json(
        [
            "message" => "DELETE Method Succes" . $id

        ]
    );
});
