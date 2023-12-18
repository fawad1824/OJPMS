<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
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







Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Website Links
Route::get('/', [WebsiteController::class, 'HomeIndex'])->name('index');
Route::get('/companies', [WebsiteController::class, 'companies'])->name('companies');
Route::get('/find-jobs', [WebsiteController::class, 'FindJobs'])->name('FindJobs');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/jobs/{id}', [WebsiteController::class, 'GetJobs'])->name('GetJobs');
