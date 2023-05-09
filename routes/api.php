<?php

use App\Http\Controllers\LibraryController;
use App\Http\Controllers\SchoolController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('classes', SchoolController::class);
// Route::apiResource('teachers', SchoolController::class);
// Route::apiResource('Students', SchoolController::class);
// Route::apiResource('books', LibraryController::class);
// Route::apiResource('users', AuthController::class);


Route::get('/', function () {
    $jsonobj = '{“hello_url” : “/hello”}';
    return json_decode($jsonobj);
});

Route::get('/hello', function () {
    return "Hello Word";
});
