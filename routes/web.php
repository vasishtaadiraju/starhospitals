<?php


use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\web\CoeController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\HomeController;
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

    $users = User::paginate(10);
    return view('book-an-appointment.book-appointment',['users'=>$users]);
});
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/contact',[ContactUsController::class,'index'])->name('contact');

Route::get('/centers-of-excellence/{slug}',[CoeController::class,'index'])->name('coe');
