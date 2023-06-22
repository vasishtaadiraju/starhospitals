<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Web\FormController;
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

Route::post('/getDoctorSuggetion',[ApiController::class , 'getDoctorSuggetion']);
Route::post('/getDoctorByBranchCoeSpeciality',[ApiController::class , 'getDoctorByBranchCoeSpeciality']);
Route::post('/getCoeSpeciality',[ApiController::class , 'getCoeSpeciality']);
Route::post('/getBranchCoeSpecialityById',[ApiController::class , 'getBranchCoeSpecialityById']);
Route::post('/getConditionsByCOESpeciality',[ApiController::class , 'getConditionsByCOESpeciality']);
Route::post('/getCOESpecilityBranchByCondition',[ApiController::class , 'getCOESpecilityBranchByCondition']);
Route::post('/patient', [FormController::class, 'patient']);
