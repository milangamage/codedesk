<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CodeDesckEmailSenderController;
use App\Models\Article;
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



Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::get('/login', [AuthController::class, 'login']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/me', [AuthController::class, 'me']);
});

//Route::group([
//    'middleware' => 'api',
//    'prefix' => 'email'
//], function ($router) {
//    Route::post('/contact-email', [CodeDesckEmailSenderController::class, 'sendEmail']);
//});

Route::post('/contact-email', [CodeDesckEmailSenderController::class, 'sendEmail']);
