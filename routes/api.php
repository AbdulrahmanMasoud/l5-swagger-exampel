<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TestController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('api/documentation', [Controller::class]);
Route::get('users', [TestController::class,'index']);
Route::post('add-user', [TestController::class,'store']);
Route::get('get-user/{id}', [TestController::class,'show']);
Route::put('edit-user/{id}', [TestController::class,'update']);
Route::delete('delete-user/{id}', [TestController::class,'destroy']);
