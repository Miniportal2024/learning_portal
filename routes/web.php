<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
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
Route::get('/index', function () {return view('pages.index');})->name('index');
Route::get('/courses', [CourseController::class, 'display'])->name('courses');
Route::get('/category', [CategoryController::class, 'display'])->name('category');
// Route::get('/category', function () {return view('pages.courses-2');})->name('old-courses');
//Route::get('/course-details/{id}', [CourseController::class, 'select'])->name('course-details');
Route::get('/course-details', function (){return view('pages.course-details');})->name('course-details');
Route::get('/course-video', [VideoController::class, 'read']);
Route::get('/developers', function () {return view('pages.developers');})->name('developers');
Route::get('/teacher-details', function () {return view('pages.teacher-details');});
Route::get('/index-onepage', function () {return view('pages.index-onepage');});
Route::get('/event', function () {return view('pages.event');});
Route::get('/gallery', function () {return view('pages.gallery');})->name('gallery');
Route::get('/about-us', function () {return view('pages.about-us');})->name('about-us');
Route::get('/Old_courses', [CourseController::class, 'display'])->name('Old_courses');
Route::get('/videos', [VideoController::class, 'read'])->name('videos');



//INSTRUCTOR AND ADMIN DASHBOARD
Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard-index');
Route::get('/dashboard', function () {return view('dashboard.dashboard');});    
Route::get('/table-datatable-basic', function () {return view('dashboard.table-datatable-basic');});
Route::get('/form-element', function () {return view('dashboard.form-element');});
Route::get('/form-validation', function () {return view('dashboard.form-validation');});
Route::get('/ui-modal', function () {return view('dashboard.ui-modal');});
Route::get('/ui-alert', function () {return view('dashboard.ui-alert');});
Route::get('/uc-sweetalert', function () {return view('dashboard.uc-sweetalert');});

//User
Route::get('/dashboard/users', [UserController::class, 'index']);   
Route::get('/dashboard/edit/{id}', [UserController::class, 'edit']);   
Route::get('/dashboard/user-display', [UserController::class, 'display']);  
Route::put('/dashboard/user-update', [UserController::class, 'update']);    
Route::delete('/dashboard/user-delete', [UserController::class, 'delete']);     
Route::post('/dashboard/user-save', [UserController::class, 'save']);    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
