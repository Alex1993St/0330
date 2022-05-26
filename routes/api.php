<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ApiController;
use \App\Http\Middleware\RedirectIfNotKeyExist;

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

Route::get('/search', [ApiController::class, 'search'])->middleware([RedirectIfNotKeyExist::class])->name('api.get.search');
Route::get('/getKey', [ApiController::class, 'getKey'])->name('api.get.key');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


