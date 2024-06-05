<?php

use App\Http\Controllers\course;
use App\Http\Controllers\quizUserController;
use App\Http\Controllers\coursepage;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\dropdownController;
use App\Http\Controllers\userPageController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\inputQuizController;


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
    Route::get('/quizUser/{subject_id}', [quizUserController::class,'show']);
    Route::post('/quizUser', [quizUserController::class,'compare']);
});

// route untuk Admin
Route::group(['middleware' => 'AdminAuthCheck'], function () {    
    Route::get('/dashboardAdmin', [dashboardController::class, 'dashboardAdmin'])->name('dashboardAdmin');
    Route::get('/userPage', [userPageController::class, 'show'])->name('userPage');
    Route::get('/delete-user/{id}', [userPageController::class, 'delete'])->name('delete-user');
    Route::resource('/quiz', inputQuizController::class);
    Route::get('/dataSubject/{course_id}', [dropdownController::class,'getSubjects'])->name('dataSubject');;
    Route::get('/dataSubjcetTable/{course_id}', [dropdownController::class,'getTableSubjects'])->name('dataSubjcetTable');
    Route::get('/allDataSubject', [dropdownController::class,'allDataSubject'])->name('allDataSubject');
    Route::get('/deleteQuiz', [dropdownController::class,'deleteQuiz'])->name('deleteQuiz');
    Route::get('/detailQuiz/{course_id}', [dropdownController::class,'showQuizPage'])->name('detailQuiz');
    Route::post('/updateQuiz/{question_id}', [dropdownController::class,'updateQuiz'])->name('updateQuiz');
    Route::get('/deleteQuestion/{question_id}', [dropdownController::class,'deleteQuestion'])->name('deleteQuestion');
    
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

Route::get('/course', [course::class, 'index'])->name('course');

#upload materi (admin)
Route::get('/upload', [SubjectController::class, 'create'])->name('materials.create');
Route::post('/materials', [SubjectController::class, 'store'])->name('subjects.store');

#download materi (user)
Route::get('/materials/{subject_id}', [SubjectController::class, 'download'])->name('materials.download');

Route::get('/coursepage/{course_id}', [SubjectController::class, 'index'])->name('coursepage');

#profile
Route::get('/showProfile', [profileController::class, 'showProfile'])->name('userProfile.showProfile');
Route::get('/editProfile', [profileController::class, 'editProfile'])->name('userProfile.editProfile');
Route::put('/updateProfile/{id}', [profileController::class, 'updateProfile'])->name('userProfile.updateProfile');