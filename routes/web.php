<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});



Route::get('/admin/login', function () {
    return view('auth.admin-login');
});

    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/check-data', [AdminController::class, 'checkdata'])->name('checkdata');
    Route::get('/admin/eop', [AdminController::class, 'eop'])->name('eop');
    Route::get('/admin/complete-reports', [AdminController::class, 'completeReports'])->name('adminbutton');
    Route::get('/admin/admin-button', [AdminController::class, 'adminbutton'])->name('adminbutton');



    Route::get('/agent', [AgentController::class, 'dashboard'])->name('dashboard');

    Route::group(['prefix' => '/admin/users', 'as' => 'users.'], function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/add', [UserController::class, 'store'])->name('add');
        Route::put('/update/{id}',[UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete')->withTrashed();
      });


