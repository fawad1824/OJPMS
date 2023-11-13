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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// In routes/api.php or similar
Route::middleware('jwt.auth')->group(function () {

    // Category
    Route::get('get-category', [APIController::class, 'GetCategory']);
    Route::post('add-category', [APIController::class, 'AddCategory']);
    Route::post('edit-category/{id}', [APIController::class, 'EditCategory']);
    Route::post('delete-category/{id}', [APIController::class, 'DeleteCategory']);

    Route::get('get-country', [APIController::class, 'GetCountry']);
    Route::get('get-state/{id}', [APIController::class, 'GetState']);
    Route::get('get-cities/{id}', [APIController::class, 'GetCities']);

});
