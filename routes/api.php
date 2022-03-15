<?php

use App\Http\Controllers\GradeController;
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

Route::get('/grade', [gradeController::class, 'index']);
Route::post('/grade', [gradeController::class, 'store']);
Route::get('/grade/{id}', [GradeController::class, 'show']);
Route::put('/grade/{id}', [GradeController::class, 'update']);
Route::delete('/grade/{id}', [GradeController::class, 'destroy']);
