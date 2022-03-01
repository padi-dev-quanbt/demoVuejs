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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', function () {
    return response()->json([
        "error_code" => 0,
        "message" => "success",
        "data" => [
            [
                "id" => 1001,
                "name" => "sản phẩm 1001",
                "price" => 500000
            ],
            [
                "id" => 1002,
                "name" => "sản phẩm 1002",
                "price" => 5000000
            ],
            [
                "id" => 1003,
                "name" => "sản phẩm 1003",
                "price" => 1500000
            ]
        ]
    ]);
});
