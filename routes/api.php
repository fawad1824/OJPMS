<?php

use App\Http\Controllers\API\APIController;
use App\Http\Controllers\AuthController;
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

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::post('register-candidate', [AuthController::class, 'registerCondidate']);
Route::post('register-vendor', [AuthController::class, 'registerVendor']);

Route::post('login-candidate', [AuthController::class, 'loginCondidate']);
Route::post('login-vendor', [AuthController::class, 'loginVendor']);
Route::post('login-admin', [AuthController::class, 'loginAdmin']);


Route::get('get-country', [APIController::class, 'GetCountry']);
Route::get('get-state/{id}', [APIController::class, 'GetState']);
Route::get('get-cities/{id}', [APIController::class, 'GetCities']);

Route::middleware('jwt.auth')->get('/auth/check', function () {
    return ['status' => true]; // Assuming you want to return a simple status indicating authentication validity
});

Route::group(['middleware' => ['jwt.auth', 'throttle:60,1']], function () {

    // Category
    Route::get('get-category', [APIController::class, 'GetCategory']);
    Route::post('add-category', [APIController::class, 'AddCategory']);
    Route::post('edit-category/{id}', [APIController::class, 'EditCategory']);
    Route::delete('delete-category/{id}', [APIController::class, 'DeleteCategory']);

    // Company
    Route::get('get-conpanies', [APIController::class, 'GetCompany']);
    Route::post('add-conpanies', [APIController::class, 'AddCompany']);
    Route::post('edit-conpanies/{id}', [APIController::class, 'editCompany']);
    Route::delete('delete-conpanies/{id}', [APIController::class, 'deleteCompany']);

    // Jobs
    Route::get('get-all-jobs', [APIController::class, 'GetJobs']);
    Route::get('get-jobs/{id}', [APIController::class, 'GetUsersJobs']);
    Route::post('add-jobs', [APIController::class, 'AddJobs']);
    Route::post('edit-jobs/{id}', [APIController::class, 'editJobs']);
    Route::delete('delete-jobs/{id}', [APIController::class, 'deleteJObs']);
});
