<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
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
    return view('index');
})->name('home');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/login', function() {
    return view('login');
})->name('login')->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->name('register.auth');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/builder/{id}', [ContentController::class, 'builder'])->name('builder')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard/guest', [DashboardController::class, 'guest_list'])->name('dashboard.guest')->middleware('auth');

Route::get('/dashboard/bank', [BankController::class, 'index'])->name('dashboard.bank')->middleware('auth');



Route::get('/dashboard/guest/{guest}', [DashboardController::class, 'delete_guest'])->name('delete.guest')->middleware('auth');

Route::get('/{name}', [ContentController::class, 'share'])->name('invite');

