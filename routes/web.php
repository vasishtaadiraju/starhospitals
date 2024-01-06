<?php


use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\BranchController;
use App\Http\Controllers\Web\CareerController;
use App\Http\Controllers\Web\CoeController;
use App\Http\Controllers\Web\ConditionsController;
use App\Http\Controllers\Web\ContactUsController;
use App\Http\Controllers\Web\DoctorController;
use App\Http\Controllers\Web\FormController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\InternationalPatientController;
use App\Http\Controllers\Web\SpecialistController;
use App\Models\User;
use App\Http\Controllers\Web\SpecialityController;
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
// include('search-console.php');
include('old.php');
// include('doctors.php');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/find-a-doctor', function () {
    return view('book-an-appointment.find-doctor');
})->name('find-doctor');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact');
// Route::get('/centers-of-excellence/{slug}',[CoeController::class,'index'])->name('coe');
// Route::get('/specialities/{slug}', [SpecialityController::class, 'index'])->name('speciality');
Route::post('/', [FormController::class, 'homeForm'])->name('home.form');
// Route::post('/centers-of-excellence',[FormController::class,'talkToDoctor'])->name('coe.form');
Route::post('/contact', [FormController::class, 'contactForm'])->name('contact.form');

// ======================================Services and Treatment ============================
// Route::get('/treatments-tests', [ConditionsController::class, 'landingPage'])->name('condition.landing');
// Route::get('/tests-procedures/{slug}', [ConditionsController::class, 'index'])->name('condition');
// Route::get('/doctors-departments/{slug}', [ConditionsController::class, 'index'])->name('department');
// Route::get('/care-at-star-hospitals/{slug}', [ConditionsController::class, 'index'])->name('care');
// ==================================

Route::get('/locations/{slug}', [BranchController::class, 'index'])->name('branch');
// Route::get('/international-patients', [InternationalPatientController::class, 'index'])->name('international_patient');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/doctors/{branch_slug}/{speciality_slug}/{slug}', [DoctorController::class, 'index'])->name('doctor');
Route::get('/specialists/{slug}/', [SpecialistController::class, 'index'])->name('specialist');
Route::get('/book-an-appointment/{branch_slug}/{speciality_slug}/{slug}', [DoctorController::class, 'consultation'])->name('doctor.book-appointment');
Route::get('/doctors/book-a-video-consultation', [DoctorController::class, 'videoConsultation'])->name('doctor.book-video-consultation');

//Form routes
Route::controller(FormController::class)->middleware(['XssSanitization', 'throttle:form'])->group(function () {
    Route::post('/request-callback', 'request_callback');
    Route::post('/talkToDoctor', 'talkToDoctor');
    Route::post('/contactForm', 'contactForm');
    Route::post('/internationalPatientEnquiryForm', 'internationalPatientEnquiryForm');
    Route::post('/videoConsultation', 'videoConsultation');
    Route::post('/physicalConsultation', 'physical_consultation');
    Route::post('/mem-register', 'memRegister');
});
Route::get('/thank-you', function () {
    return view('thank-you');
});
Route::get('/terms-and-conditions', function () {
    $breadcrum = "<div class='banner__breadcrum'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a >Terms & Conditions</a>
</div>";
    return view('terms-and-condition', ['breadcrum' => $breadcrum]);
})->name('t-c');

//Thank you routes
Route::get('/request-callback/thank-you', function () {
    return view('thank-you');
});

Route::get('/talk-to-a-doctor/thank-you', function () {
    return view('thank-you');
});

Route::get('/contact/thank-you', function () {
    return view('thank-you');
});

Route::get('/international-patients/thank-you', function () {
    return view('thank-you');
});

Route::get('/video-consultation/thank-you', function () {
    return view('thank-you');
});

Route::get('/courses/mem', function () {
    $breadcrum = "<div class='banner__breadcrum'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a >Masters in Emergency Medicine</a>
</div>";

    return view('mem', ['breadcrum' => $breadcrum]);
});

Route::get('/courses/mem/registration', function () {
    $breadcrum = "<div class='banner__breadcrum'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a >Masters in Emergency Medicine</a>
</div>";

    return view('mem-form', ['breadcrum' => $breadcrum]);
});

Route::get('/courses/mem/registration/thank-you', function () {
    return view('mem-thank-you');
});


