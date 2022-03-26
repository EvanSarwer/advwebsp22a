<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentAPIController;
use App\Http\Controllers\CourseAPIController;

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

Route::get('/department/list',[DepartmentAPIController::class,'list']);
Route::get('/department/details/{id}',[DepartmentAPIController::class,'details']);
Route::get('/department/delete/{id}',[DepartmentAPIController::class,'delete']);

Route::post('/department/create',[DepartmentAPIController::class,'create']);
Route::post('/department/edit',[DepartmentAPIController::class,'edit']);



Route::get('/course/list',[CourseAPIController::class,'list']);
Route::get('/course/details/{id}',[CourseAPIController::class,'details']);
Route::get('/course/delete/{id}',[CourseAPIController::class,'delete']);

Route::post('/course/create',[CourseAPIController::class,'create']);
Route::post('/course/edit',[CourseAPIController::class,'edit']);



