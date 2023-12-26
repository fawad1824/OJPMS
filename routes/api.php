<?php

use App\Http\Controllers\API\APIController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['auth:sanctum']], function () {

    // JObs create
    Route::post('/add-admin-jobs', [APIController::class, 'AddadminJobs'])->name('AddadminJobs');
    Route::get('/delete-admin-jobs/{id}', [APIController::class, 'DeleteadminJobs'])->name('DeleteadminJobs');
    // Company profile
    Route::post('/add-company-profile', [APIController::class, 'AddcompanyProfile'])->name('AddcompanyProfile');
    Route::post('/logout', [APIController::class, 'logout'])->name('logout');


    // Create create-cv
    Route::get('/create-cv', [APIController::class, 'CreateCv'])->name('CreateCv');
    Route::post('/add-create-cv', [APIController::class, 'AddCreateCv'])->name('AddCreateCv');
});

Route::post('/register', [APIController::class, 'register']);
Route::post('/login', [APIController::class, 'login']);
