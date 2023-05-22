<?php

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

Route::get('/', function () {

    $users = User::paginate(10);
    return view('home',['users'=>$users]);
});
Route::get('/doctor/book-an-appointment', function () {

    $users = User::paginate(10);
    return view('book-an-appointment.book-appointment',['users'=>$users]);
});
