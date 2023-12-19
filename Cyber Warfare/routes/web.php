<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BorderController;
use App\Events\message;
use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|ls
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/dashboard', function () {
    return view('BorderUser');
});

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/login', [LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'authentication'])->name('loginuser');

Route::get('/register', [RegisterController::class,'index'])->name('register');

Route::post('/register',[RegisterController::class,'authentication'])->name('reguser');

Route::get('/BorderResident', [BorderController::class,'index'])->name('BorderUser');

Route::get('/chat', [ChatController::class,'index'])->name('displayChat');

Route::post('/chat', [ChatController::class,'sendMessage'])->name('message');

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::get('/report', [BorderController::class,'report'])->name('report');


