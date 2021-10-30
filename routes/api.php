<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

# First, you have to import the controller
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentsController;


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

# Animals API
// Create route GET for returning a data animals
Route::get('/animals', [AnimalController::class, 'index']);

// Create route POST for returning a data animals
Route::post('/animals', [AnimalController::class, 'store']);

// Create route PUT for returning a data animals
Route::put('/animals/{id}', [AnimalController::class, 'update']);

// Create route DELETE for returning a data animals
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);


# Students API
Route::get('/students', [StudentsController::class, 'index']);
Route::post('/students', [StudentsController::class, 'create']);
Route::put('/students/{id}', [StudentsController::class, 'update']);
Route::delete('/students/{id}', [StudentsController::class, 'destroy']);