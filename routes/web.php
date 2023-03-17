<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExpertiseController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  

Route::prefix('dashboard')->group(function () {
    Route::resource('/about', AboutController::class);
    Route::resource('/expertise', ExpertiseController::class);
    Route::resource('/skill', SkillController::class);
    Route::resource('/education', EducationController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/portfolio', PortfolioController::class);
});
// Route::resource('user', UserController::class);
// Route::resource('user', UserController::class);
// Route::resource('user', UserController::class);