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
// JObs create
Route::get('/admin-jobs', [HomeController::class, 'adminJobs'])->name('adminJobs');
Route::get('/create-admin-jobs', [HomeController::class, 'CreateadminJobs'])->name('CreateadminJobs');
Route::get('/edit-admin-jobs/{id}', [HomeController::class, 'EditadminJobs'])->name('EditadminJobs');
Route::post('/add-admin-jobs', [HomeController::class, 'AddadminJobs'])->name('AddadminJobs');
Route::get('/delete-admin-jobs/{id}', [HomeController::class, 'DeleteadminJobs'])->name('DeleteadminJobs');
// Company profile
Route::get('/company-profile', [HomeController::class, 'companyProfile'])->name('companyProfile');
Route::post('/add-company-profile', [HomeController::class, 'AddcompanyProfile'])->name('AddcompanyProfile');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');


// Website Links
Route::get('/', [WebsiteController::class, 'HomeIndex'])->name('index');
Route::get('/companies', [WebsiteController::class, 'companies'])->name('companies');
Route::get('/find-jobs', [WebsiteController::class, 'FindJobs'])->name('FindJobs');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/jobs/{id}', [WebsiteController::class, 'GetJobs'])->name('GetJobs');

// Create create-cv
Route::get('/create-cv', [WebsiteController::class, 'CreateCv'])->name('CreateCv');
Route::post('/add-create-cv', [WebsiteController::class, 'AddCreateCv'])->name('AddCreateCv');


Route::get('/verification/verify', [VerificationController::class, 'verify'])->name('verification.verify');
