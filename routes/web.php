<?php


use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\web\BranchController;
use App\Http\Controllers\web\CareerController;
use App\Http\Controllers\web\CoeController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\web\InternationalPatientController;
use App\Models\User;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/doctor/book-an-appointment', function () {
    return view('book-an-appointment.find-doctor');
})->name('find-doctor');
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/contact',[ContactUsController::class,'index'])->name('contact');
Route::get('/centers-of-excellence/{slug}',[CoeController::class,'index'])->name('coe');
Route::get('/locations/{slug}',[BranchController::class,'index'])->name('branch');
Route::get('/international-patient',[InternationalPatientController::class,'index'])->name('international_patient');
Route::get('/career',[CareerController::class,'index'])->name('career');
