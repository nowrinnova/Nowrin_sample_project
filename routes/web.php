<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;
use App\http\Controllers\StudentController;
use App\http\Controllers\CourseController;

use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/www.mon_valo_nai', function () {
    return view('mon_valo_nai');
});
Route::get('/login', [LoginController::class, 'index']);
Route::get('/mon', [LoginController::class, 'ALU']);
Route::get('/student_profile', [StudentController::class, 'index']);
Route::get('/regestration', [StudentController::class, 'correct']);
Route::get('/student_login', [LoginController::class, 'Login']);
Route::get('/showcourse', [CourseController::class, 'showcourse']);
