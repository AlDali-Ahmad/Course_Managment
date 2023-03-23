<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CourseController;
use \App\Http\Controllers\LessonController;
use \App\Http\Controllers\CourseTypeController;
use \App\Http\Controllers\TeacherController;
use \App\Http\Controllers\RoleController;
use \App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('welcome',[CourseTypeController::class,'welcome']);

Route::get('Adminindex',[CourseController::class,'Adminindex']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('courses',CourseController::class)
    ->only(['index','store','edit','create','update','destroy'])
    ->middleware(['auth','verified']);

Route::resource('lessons',LessonController::class)
    ->only(['index','store','edit','create','update','destroy'])
    ->middleware(['auth','verified']);

Route::resource('coursetypes',CourseTypeController::class)
    ->only(['index','store','edit','create','update','destroy'])
    ->middleware(['auth','verified']);

Route::resource('teacher',TeacherController::class)
    ->only(['index','store','edit','create','update','destroy'])
    ->middleware(['auth','verified']);

Route::get('lessons/course_lesson/{id}',[LessonController::class,'course_lessons'])->name('lessons.course_lessons');

Route::get('courses/gategore_course/{id}',[CourseController::class,'Gategore_courses'])->name('gategore.course_courses');


















Route::get('coursetypes',[CourseTypeController::class,'index']);
Route::get('coursetypes/create',[CourseTypeController::class,'create']);
Route::post('coursetypes/create',[CourseTypeController::class,'store']);
Route::get('/coursetypes/{course_type}',[CourseTypeController::class,'show']);
Route::delete('/coursetypes/{course_type}',[CourseTypeController::class,'destroy']);
Route::get('/coursetypes/{course_type}/edit',[CourseTypeController::class,'edit']);
Route::put('/coursetypes/{course_type}/edit',[CourseTypeController::class,'update']);



Route::get('courses',[CourseController::class,'index']);
/*Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');*/
Route::post('courses/create',[CourseController::class,'store']);
Route::get('/courses/{course}',[CourseController::class,'show']);
Route::delete('/courses/{course}',[CourseController::class,'destroy']);
Route::get('/courses/{course}/edit',[CourseController::class,'edit']);
Route::put('/courses/{course}/edit',[CourseController::class,'update']);

Route::get('lessons',[LessonController::class,'index']);
Route::get('lessons/create',[LessonController::class,'create']);
Route::post('lessons/create',[LessonController::class,'store']);
Route::get('/lessons/{lesson}',[LessonController::class,'show']);
Route::get('/lessons/{lesson}/edit',[LessonController::class,'edit']);
Route::put('/lessons/{lesson}/edit',[LessonController::class,'update']);

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});



require __DIR__.'/auth.php';
