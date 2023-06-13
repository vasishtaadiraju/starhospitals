<?php


use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\BranchController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\Web\CoeController;
use App\Http\Controllers\Web\ConditionsController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\FormController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\InternationalPatientController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/doctor/book-an-appointment', function () {
    return view('book-an-appointment.find-doctor');
})->name('find-doctor');
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/contact',[ContactUsController::class,'index'])->name('contact');
Route::get('/centers-of-excellence/{slug}',[CoeController::class,'index'])->name('coe');
Route::post('/',[FormController::class,'homeForm'])->name('home.form');
Route::post('/centers-of-excellence',[FormController::class,'talkToDoctor'])->name('coe.form');
Route::post('/contact',[FormController::class,'contactForm'])->name('contact.form');
Route::get('/condition-treatments',[ConditionsController::class, 'index']);
Route::get('/locations/{slug}',[BranchController::class,'index'])->name('branch');
Route::get('/international-patient',[InternationalPatientController::class,'index'])->name('international_patient');
Route::get('/career',[CareerController::class,'index'])->name('career');
