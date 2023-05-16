<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
  
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
  
Auth::routes();
  
/*------------------------------------------
--------------------------------------------
All Student User Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:student'])->group(function () {
  
    Route::get('/student/home', [HomeController::class, 'studentHome'])->name('student.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin User Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Moderator User Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:moderator'])->group(function () {
  
    Route::get('/moderator/home', [HomeController::class, 'moderatorHome'])->name('manager.home');
});

/*------------------------------------------
--------------------------------------------
All Instructor User Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:instructor'])->group(function () {
  
    Route::get('/instructor/home', [HomeController::class, 'instructorHome'])->name('instructor.home');
});