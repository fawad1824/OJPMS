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
Route::get('/delete-apply-jobs/{id}', [HomeController::class, 'DeleteApplyJobs'])->name('DeleteApplyJobs');
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
Route::get('/create-cv', [HomeController::class, 'CreateCv'])->name('CreateCv');
Route::get('/create-cv/{id?}', [HomeController::class, 'CreateCv'])->name('CreateCv');
Route::post('/add-create-cv', [HomeController::class, 'AddCreateCv'])->name('AddCreateCv');
Route::get('/apply-job/{id}', [HomeController::class, 'ApplyJObs'])->name('ApplyJObs');
Route::get('/all-job', [HomeController::class, 'AllJObs'])->name('AllJObs');
Route::get('/condit-job', [HomeController::class, 'condidateJobs'])->name('condidateJobs');
Route::get('/condit-job/{id}', [HomeController::class, 'DeletedcondidateJobs'])->name('DeletedcondidateJobs');
Route::get('/condit-job-select', [HomeController::class, 'selectCandidate'])->name('selectCandidate');


Route::get('/admin-company', [HomeController::class, 'adminCategory'])->name('adminCategory');
Route::get('/admin-list', [HomeController::class, 'adminlist'])->name('adminlist');
Route::get('/admin-jobs-list', [HomeController::class, 'adminJObslist'])->name('adminJObslist');
Route::get('/admin-profile', [HomeController::class, 'adminProfile'])->name('adminProfile');
Route::post('/addmin-profile', [HomeController::class, 'AddminProfile'])->name('AddminProfile');


Route::get('/verification/verify', [VerificationController::class, 'verify'])->name('verification.verify');
