<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuizController;
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
Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('pages.home');
    Route::post('/user/logout', [LoginController::class, 'logout'])->name('user.logout');
    // Route::get('/', function () {return view('pages.index');});
    // Route::get('/index', function () {return view('pages.index');})->name('index');


    Route::get('/new-courses', [CourseController::class, 'new_courses'])->name('new-courses');
    Route::get('/old-courses', [CourseController::class, 'old_courses'])->name('old-courses');
    // Route::get('/courses/{id}', [CourseController::class, 'display'])->name('courses');
    Route::get('/course-details/{id}', [CourseController::class, 'select'])->name('course-details');

    Route::get('/category', [CategoryController::class, 'display'])->name('category');
    Route::get('/category/{id}', [CategoryController::class, 'select'])->name('category.selected');
    // Route::get('/category', function () {return view('pages.courses-2');})->name('old-courses');
    //Route::get('/course-details/{id}', [CourseController::class, 'select'])->name('course-details');

    Route::get('/course-video/{id}', [VideoController::class, 'select']);
    Route::get('/course-video/view/{id}', [VideoController::class, 'view']);
    Route::get('/videos', [VideoController::class, 'read'])->name('videos');
    Route::post('/videos/update/user-video', [VideoController::class, 'update_user_video'])->name('update.user_video');

    Route::get('/developers', function () {return view('pages.developers');})->name('developers');
    Route::get('/teacher-details', function () {return view('pages.teacher-details');});
    Route::get('/index-onepage', function () {return view('pages.index-onepage');});
    Route::get('/event', function () {return view('pages.event');});
    Route::get('/gallery', function () {return view('pages.gallery');})->name('gallery');
    Route::get('/about-us', function () {return view('pages.about-us');})->name('about-us');

    Route::get('/quiz/{id}', [QuizController::class, 'index'])->name('quiz.list');
    Route::post('/quiz/check', [QuizController::class, 'check'])->name('quiz.check');

    Route::middleware(['role:Administrator'])->prefix('administrator')->group(function () {

        //INSTRUCTOR AND ADMIN DASHBOARD
        // Route::get('/dashboard', function () {return view('dashboard.dashboard');});    
        // Route::get('/table-datatable-basic', function () {return view('dashboard.table-datatable-basic');});
        // Route::get('/form-element', function () {return view('dashboard.form-element');});
        // Route::get('/form-validation', function () {return view('dashboard.form-validation');});
        // Route::get('/ui-modal', function () {return view('dashboard.ui-modal');});
        // Route::get('/ui-alert', function () {return view('dashboard.ui-alert');});
        // Route::get('/uc-sweetalert', function () {return view('dashboard.uc-sweetalert');});

        Route::get('/dashboard/quizzes', [QuizController::class, 'list'])->name('dashboard.quizzes');  
        Route::get('/dashboard/quiz/edit/{id}', [QuizController::class, 'edit']);   
        Route::get('/dashboard/quiz-display', [QuizController::class, 'display'])->name('dashboard.quizzes.display');  
        Route::put('/dashboard/quiz-update', [QuizController::class, 'update'])->name('dashboard.quiz.update');    
        Route::delete('/dashboard/quiz-delete', [QuizController::class, 'delete'])->name('dashboard.quiz.delete');     
        Route::post('/dashboard/quiz-save', [QuizController::class, 'save'])->name('dashboard.quiz.save');
        Route::post('/dashboard/video-list', [VideoController::class, 'list'])->name('dashboard.video.list');  


        Route::get('/dashboard/settings', [UserController::class, 'index'])->name('dashboard.settings');  
        // //User
        Route::get('/dashboard/users', [UserController::class, 'index'])->name('dashboard.users');   
        Route::get('/dashboard/user/edit/{id}', [UserController::class, 'edit']);   
        Route::get('/dashboard/user-display', [UserController::class, 'display'])->name('dashboard.users.display');  
        Route::put('/dashboard/user-update', [UserController::class, 'update'])->name('dashboard.users.update');    
        Route::delete('/dashboard/user-delete', [UserController::class, 'delete'])->name('dashboard.users.delete');     
        Route::post('/dashboard/user-save', [UserController::class, 'save'])->name('dashboard.user.save');    
    });

});

Auth::routes();


