<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {return view('pages.index');});
Route::get('/index', function () {return view('pages.index');});
Route::get('/courses', function () {return view('pages.courses');});
Route::get('/courses-2', function () {return view('pages.courses-2');});
Route::get('/courses-details', function () {return view('pages.course-details');});
Route::get('/course-video', function () {return view('pages.course-video');});
Route::get('/teachers', function () {return view('pages.teachers');});
Route::get('/teacher-details', function () {return view('pages.teacher-details');});
Route::get('/index-onepage', function () {return view('pages.index-onepage');});
Route::get('/event', function () {return view('pages.event');});
Route::get('/gallery', function () {return view('pages.gallery');});

//INSTRUCTOR AND ADMIN DASHBOARD
Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard-index');
Route::get('/table-datatable-basic', function () {return view('dashboard.table-datatable-basic');});
Route::get('/form-element', function () {return view('dashboard.form-element');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'pages.index'])->name('home');
