<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\styController;
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

//main login
Route::get('sty-test-func', [\App\Http\Controllers\Api\styController::class, 'getStyTestFunc']);
