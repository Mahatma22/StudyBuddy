<?php

use App\Http\Controllers\course;
use App\Http\Controllers\coursepage;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardController;


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


// route untuk User
Route::group(['middleware' => 'UserAuthCheck'], function () {   
    Route::get('/dashboardUser', [dashboardController::class, 'dashboardUser'])->name('dashboardUser');
});

// route untuk Admin
Route::group(['middleware' => 'AdminAuthCheck'], function () {    
    Route::get('/dashboardAdmin', [dashboardController::class, 'dashboardAdmin'])->name('dashboardAdmin');
});


Route::group(['middleware' => 'adminLoggedIn'], function () {
    Route::get('/loginAdmin', [AuthController::class, 'viewAdminUser'])->name('loginAdmin')->middleware('userLoggedIn');
    Route::get('/', function () { return view('laddingpage'); })->middleware('userLoggedIn');
});

Route::group(['middleware' => 'userLoggedIn'], function () {
    Route::get('/loginUser', [AuthController::class, 'viewLoginUser'])->name('loginUser')->middleware('adminLoggedIn');
    Route::get('/registerUser', [AuthController::class, 'viewRegisterUser'])->name('registerUser')->middleware('adminLoggedIn');
});

Route::post('/dataRegister', [AuthController::class, 'registerUser'])->name('dataRegister');
Route::post('/dataLogin', [AuthController::class, 'loginUser'])->name('dataLogin');
Route::post('/dataAdmin', [AuthController::class, 'loginAdmin'])->name('dataAdmin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/coursepage/{viewName}', [coursepage::class, 'index'])->name('coursepage');
Route::get('/course', [course::class, 'index'])->name('course');

#upload materi (admin)
Route::get('/upload', [MaterialController::class, 'create'])->name('materials.create');
Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');

#download materi (user)
Route::get('/materials/{id}/download', [MaterialController::class, 'download'])->name('materials.download');

Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
