<?php

use App\Http\Controllers\AuthCtrl;
use App\Http\Controllers\BloodGroupController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ReligionController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [AuthCtrl::class, "login"]);


Route::get('/navigation', [NavigationController::class, "TreeNavigation"]);
Route::get('/blood-groups', [BloodGroupController::class, "index"]);
Route::get('/religions', [ReligionController::class, "index"]);
Route::get('/companies', [CompanyController::class, "index"]);

Route::resource('/employee', EmployeeController::class);


Route::group(['middleware' => 'auth:sanctum'], function(){
});

