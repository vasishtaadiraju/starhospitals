<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Jobs\ContactFormToHospital;
use App\Jobs\ContactFormToUser;
use App\Jobs\HospitalTalkToDoctor;
use App\Jobs\InternationalToHospital;
use App\Jobs\RequestCallbackToHospital;
use App\Jobs\RequestCallbackToUser;
use App\Jobs\UserTalkToDoctor;
use App\Jobs\VideoConsultationToHospital;
use App\Jobs\VideoConsultationToUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
  public function request_callback(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:15',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:255',
      'department' => 'required|string|max:255',
      'date' => 'required|date',
    ]);

    $utm_source = $utm_medium = $utm_campaign = $utm_term = $utm_content = $utm_lms = null;

    if (session()->exists('utm_source')) {
      $utm_source = session('utm_source');
    }

    if (session()->exists('utm_medium')) {
      $utm_medium = session('utm_medium');
    }

    if (session()->exists('utm_campaign')) {
      $utm_campaign = session('utm_campaign');
    }

    if (session()->exists('utm_term')) {
      $utm_term = session('utm_term');
    }

    if (session()->exists('utm_content')) {
      $utm_content = session('utm_content');
    }

    if (session()->exists('utm_lms')) {
      $utm_lms = session('utm_lms');
    }

    DB::table('request_callback_form')->insert([
      'name' => $request->input('name'),
      'country_code' => $request->input('country_code'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'department' => $request->input('department'),
      'date' => $request->input('date'),
      'utm_source' => $utm_source,
      'utm_medium' => $utm_medium,
      'utm_campaign' => $utm_campaign,
      'utm_term' => $utm_term,
      'utm_content' => $utm_content,
      'utm_lms' => $utm_lms,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    dispatch(new RequestCallbackToHospital($request->input('name'), $request->input('contact'), $request->input('email'), $request->input('department'), $request->input('date')));
    dispatch(new RequestCallbackToUser($request->input('email')));

    return redirect('request-callback/thank-you');
  }

  public function talkToDoctor(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:15',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:255',
      'speciality' => 'required|string|max:255',
      'message' => 'required|string',
    ]);

    $utm_source = $utm_medium = $utm_campaign = $utm_term = $utm_content = $utm_lms = null;

    if (session()->exists('utm_source')) {
      $utm_source = session('utm_source');
    }

    if (session()->exists('utm_medium')) {
      $utm_medium = session('utm_medium');
    }

    if (session()->exists('utm_campaign')) {
      $utm_campaign = session('utm_campaign');
    }

    if (session()->exists('utm_term')) {
      $utm_term = session('utm_term');
    }

    if (session()->exists('utm_content')) {
      $utm_content = session('utm_content');
    }

    if (session()->exists('utm_lms')) {
      $utm_lms = session('utm_lms');
    }

    DB::table('talk_doctor_form')->insert([
      'name' => $request->input('name'),
      'country_code' => $request->input('country_code'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'speciality' => $request->input('speciality'),
      'message' => $request->input('message'),
      'utm_source' => $utm_source,
      'utm_medium' => $utm_medium,
      'utm_campaign' => $utm_campaign,
      'utm_term' => $utm_term,
      'utm_content' => $utm_content,
      'utm_lms' => $utm_lms,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    dispatch(new HospitalTalkToDoctor($request->input('name'), $request->input('contact'), $request->input('email'), $request->input('speciality'), $request->input('message')));
    dispatch(new UserTalkToDoctor($request->input('email')));

    return redirect('talk-to-a-doctor/thank-you');
  }

  public function contactForm(Request $request)
  {
    $request->validate([
      'type' => ['required', 'string', Rule::in(['feedback', 'complaint', 'enquiry'])],
      'name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:15',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:255',
      'subject' => 'required|string|max:255',
      'message' => 'required|string'
    ]);

    $utm_source = $utm_medium = $utm_campaign = $utm_term = $utm_content = $utm_lms = null;

    if (session()->exists('utm_source')) {
      $utm_source = session('utm_source');
    }

    if (session()->exists('utm_medium')) {
      $utm_medium = session('utm_medium');
    }

    if (session()->exists('utm_campaign')) {
      $utm_campaign = session('utm_campaign');
    }

    if (session()->exists('utm_term')) {
      $utm_term = session('utm_term');
    }

    if (session()->exists('utm_content')) {
      $utm_content = session('utm_content');
    }

    if (session()->exists('utm_lms')) {
      $utm_lms = session('utm_lms');
    }

    DB::table('contact_us_form')->insert([
      'type' => $request->input('type'),
      'name' => $request->input('name'),
      'country_code' => $request->input('country_code'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'subject' => $request->input('subject'),
      'message' => $request->input('message'),
      'utm_source' => $utm_source,
      'utm_medium' => $utm_medium,
      'utm_campaign' => $utm_campaign,
      'utm_term' => $utm_term,
      'utm_content' => $utm_content,
      'utm_lms' => $utm_lms,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    dispatch(new ContactFormToHospital($request->input('type'), $request->input('name'), $request->input('contact'), $request->input('email'), $request->input('subject'), $request->input('message')));
    dispatch(new ContactFormToUser($request->input('email')));

    return redirect('contact/thank-you');
  }

  public function internationalPatientEnquiryForm(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:15',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:255',
      'department' => 'required|string|max:255',
      'report' => 'required|file|mimes:jpg,jpeg,png,docx,pdf|max:5120'
    ]);

    $utm_source = $utm_medium = $utm_campaign = $utm_term = $utm_content = $utm_lms = null;

    if (session()->exists('utm_source')) {
      $utm_source = session('utm_source');
    }

    if (session()->exists('utm_medium')) {
      $utm_medium = session('utm_medium');
    }

    if (session()->exists('utm_campaign')) {
      $utm_campaign = session('utm_campaign');
    }

    if (session()->exists('utm_term')) {
      $utm_term = session('utm_term');
    }

    if (session()->exists('utm_content')) {
      $utm_content = session('utm_content');
    }

    if (session()->exists('utm_lms')) {
      $utm_lms = session('utm_lms');
    }

    DB::table('international_patient_enquiry_form')->insert([
      'name' => $request->input('name'),
      'country_code' => $request->input('country_code'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'department' => $request->input('department'),
      'report' => $request->file('report')->store('InternationalPatient', 's3'),
      'utm_source' => $utm_source,
      'utm_medium' => $utm_medium,
      'utm_campaign' => $utm_campaign,
      'utm_term' => $utm_term,
      'utm_content' => $utm_content,
      'utm_lms' => $utm_lms,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    dispatch(new InternationalToHospital($request->input('name'), $request->input('country_code'), $request->input('contact'), $request->input('email'), $request->input('department'), $request->input('report')));
    dispatch(new RequestCallbackToUser($request->input('email')));

    return redirect('international-patients/thank-you');
  }

  public function videoConsultation(Request $request)
  {
    $request->validate([
      'firstname' => 'required|string|max:255',
      'lastname' => 'required|string|max:255',
      'guardian_name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:15',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:255',
      'branch' => 'required|string|max:255',
      'coe' => 'required|string|max:255',
      'speciality' => 'required|string|max:255',
      'doctor' => 'required|string|max:255',
      'date' => 'required|date'
    ]);

    $utm_source = $utm_medium = $utm_campaign = $utm_term = $utm_content = $utm_lms = null;

    if (session()->exists('utm_source')) {
      $utm_source = session('utm_source');
    }

    if (session()->exists('utm_medium')) {
      $utm_medium = session('utm_medium');
    }

    if (session()->exists('utm_campaign')) {
      $utm_campaign = session('utm_campaign');
    }

    if (session()->exists('utm_term')) {
      $utm_term = session('utm_term');
    }

    if (session()->exists('utm_content')) {
      $utm_content = session('utm_content');
    }

    if (session()->exists('utm_lms')) {
      $utm_lms = session('utm_lms');
    }

    DB::table('video_consultation')->insert([
      'firstname' => $request->input('firstname'),
      'lastname' => $request->input('lastname'),
      'guardian_name' => $request->input('guardian_name'),
      'country_code' => $request->input('country_code'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'branch' => $request->input('branch'),
      'coe' => $request->input('coe'),
      'speciality' => $request->input('speciality'),
      'doctor' => $request->input('doctor'),
      'date' => $request->input('date'),
      'utm_source' => $utm_source,
      'utm_medium' => $utm_medium,
      'utm_campaign' => $utm_campaign,
      'utm_term' => $utm_term,
      'utm_content' => $utm_content,
      'utm_lms' => $utm_lms,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    dispatch(new VideoConsultationToHospital($request->input('firstname'), $request->input('lastname'), $request->input('guardian_name'), $request->input('country_code'), $request->input('contact'), $request->input('email'), $request->input('branch'), $request->input('coe'), $request->input('speciality'), $request->input('doctor'), $request->input('date')));
    dispatch(new VideoConsultationToUser($request->input('email')));

    return redirect('video-consultation/thank-you');
  }

  public function patient(Request $request)
  {
    $validation = Validator::make($request->all(), [
      'name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:15',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:255',
      'branch' => 'required|string|max:255',
      'speciality' => 'required|string|max:255',
      'doctor' => 'required|string|max:255',
      'href' => 'required|url'
    ]);

    if ($validation->fails()) {
      return response()->json([
        'message' => $validation->errors()
      ], 422);
    }

    $utm_source = $utm_medium = $utm_campaign = $utm_term = $utm_content = $utm_lms = null;

    if (session()->exists('utm_source')) {
      $utm_source = session('utm_source');
    }

    if (session()->exists('utm_medium')) {
      $utm_medium = session('utm_medium');
    }

    if (session()->exists('utm_campaign')) {
      $utm_campaign = session('utm_campaign');
    }

    if (session()->exists('utm_term')) {
      $utm_term = session('utm_term');
    }

    if (session()->exists('utm_content')) {
      $utm_content = session('utm_content');
    }

    if (session()->exists('utm_lms')) {
      $utm_lms = session('utm_lms');
    }

    DB::table('patients')->insert([
      'country_code' => $request->input('name'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'branch' => $request->input('branch'),
      'speciality' => $request->input('speciality'),
      'doctor' => $request->input('doctor'),
      'utm_source' => $utm_source,
      'utm_medium' => $utm_medium,
      'utm_campaign' => $utm_campaign,
      'utm_term' => $utm_term,
      'utm_content' => $utm_content,
      'utm_lms' => $utm_lms,
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return response()->json([
      'href' => $request->input('href')
    ], 200);
  }
}
