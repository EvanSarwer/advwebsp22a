<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseAPIController;
use App\Http\Controllers\DepartmentAPIController;
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

Route::get('/course/all',[CourseAPIController::class,'getall']);
Route::get('/course/{id}',[CourseAPIController::class,'get']);
Route::post('/course/create',[CourseAPIController::class,'createCourseSubmit']);
Route::post('/course/edit',[CourseAPIController::class,'editCourseSubmit']);
Route::get('/course/delete/{id}',[CourseAPIController::class,'deleteCourse']);

Route::get('/dept/all',[DepartmentAPIController::class,'getall']);
Route::post('/dept/create',[DepartmentAPIController::class,'createDepartmentSubmit']);
Route::post('/dept/edit',[DepartmentAPIController::class,'editDepartmentSubmit']);
Route::get('/dept/delete/{id}',[DepartmentAPIController::class,'deleteDepartment']);
Route::get('/dept/{id}',[DepartmentAPIController::class,'departmentDetails']);
