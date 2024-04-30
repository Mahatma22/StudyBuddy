<?php

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

Route::get('/', function () {
    return view('dashboard.dashboardUser');
});



Route::get('/test', function () {
    return view('laddingpage');
});

Route::get('/loginUser', [AuthController::class, 'viewLoginUser'])->name('loginUser');
Route::get('/registerUser', [AuthController::class, 'viewRegisterUser'])->name('registerUser');
Route::get('/loginAdmin', [AuthController::class, 'viewAdminUser'])->name('loginAdmin');

Route::get('/dashboardAdmin', [dashboardController::class, 'dashboardAdmin'])->name('dashoardAdmin');

Route::post('/dataRegister', [AuthController::class, 'registerUser'])->name('dataRegister');
Route::post('/dataLogin', [AuthController::class, 'loginUser'])->name('dataLogin');
Route::post('/dataAdmin', [AuthController::class, 'loginAdmin'])->name('dataAdmin');