<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

# first, you have to import the controller
use App\Http\Controllers\AnimalController;

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

// create route GET for returning a data animals
Route::get('/animals', [AnimalController::class, 'index']);

// create route POST for returning a data animals
Route::post('/animals', [AnimalController::class, 'store']);

// create route PUT for returning a data animals
Route::put('/animals/{id}', [AnimalController::class, 'update']);

// create route DELETE for returning a data animals
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);