<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/login','pagescontroller@index');
Route::get('/',[pagescontroller::class,'index'])->name('home');
Route::get('/login',[pagescontroller::class,'login'])->name('login');
Route::get('/registration',[pagescontroller::class,'register'])->name('register');

Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/get/{id}',[StudentController::class,'get'])->name('student.details');
Route::get('/student/list',[StudentController::class,'list'])->name('list');

Route::post('/login',[pagescontroller::class,'loginsubmit'])->name('login.submit');
Route::post('/registration',[pagescontroller::class,'registersubmit'])->name('register.submit');
Route::get('/department/list',[DepartmentController::class,'list'])->middleware('auth.user')->name('department.list');
Route::get('/department/details/{id}',[DepartmentController::class,'details'])->name('department.details');

Route::get('/teacher/create',[TeacherController::class,'create']);
Route::get('/teacher/edit',[TeacherController::class,'edit']);
Route::get('teacher/list',[TeacherController::class,'list'])->name('teacher.list');
Route::get('teacher/get/{id}',[TeacherController::class,'get'])->name('teacher.details');

Route::get('/logout',[pagescontroller::class,'logout'])->name('logout');