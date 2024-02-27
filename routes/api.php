<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\HisApiController;
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
Route::post('/getCOESpecilityBranchBySpecialist',[ApiController::class , 'getCOESpecilityBranchBySpecialist']);
Route::post('/getSpecialistPage',[ApiController::class , 'getSpecialistPage']);
Route::post('/patient', [FormController::class, 'patient']);




Route::controller(HisApiController::class)->prefix('appointment')->group(function () {
    Route::post('/check-availability', 'check_availability');
    Route::post('/patients', 'patients')->middleware('verifyApi');
    Route::post('/register-patients', 'register_patients')->middleware('verifyApi')->middleware('throttle:his');
    Route::post('/send-otp', 'send_otp')->middleware('throttle:his');
    Route::post('/verify-otp', 'verify_otp')->middleware('throttle:his');
    Route::post('/book-appointment', 'book_appointment')->middleware('verifyApi')->middleware('throttle:his:7,1');
});