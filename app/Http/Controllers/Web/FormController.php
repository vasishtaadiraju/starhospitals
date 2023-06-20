<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
  public function request_callback(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'mobile' => 'required|string|max:20',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:150',
      'department' => 'required|string|max:100',
      'date' => 'required|date',
    ]);

    DB::table('request_callback_form')->insert([
      'name' => $request->input('name'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'department' => $request->input('department'),
      'date' => $request->input('date'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return redirect()->route('home')->with('success', 'Request submitted successfully!!');
  }

  public function talkToDoctor(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:100',
      'contact' => 'required|string|max:20',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:150',
      'speciality' => 'required|string|max:50',
      'message' => 'required|string',
    ]);

    DB::table('talk_doctor_form')->insert([
      'name' => $request->input('name'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'speciality' => $request->input('speciality'),
      'message' => $request->input('message'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return redirect()->route('coe')->with('success', 'Request submitted successfully!!');
  }

  public function contactForm(Request $request)
  {
    $request->validate([
      'type' => ['required', 'string', Rule::in(['feedback', 'complaint', 'enquiry'])],
      'name' => 'required|string|max:100',
      'contact' => 'required|string|max:20',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:150',
      'subject' => 'required|string|max:255',
      'message' => 'required|string'
    ]);

    DB::table('contact_us_form')->insert([
      'type' => $request->input('type'),
      'name' => $request->input('name'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'subject' => $request->input('subject'),
      'message' => $request->input('message'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return redirect()->route('contact')->with('success', 'Request submitted successfully!!');
  }

  public function internationalPatientEnquiryForm(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:20',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:150',
      'department' => 'required|string|max:100',
      'report' => 'required|file|mimes:jpg,jpeg,png,docx,pdf|max:5120'
    ]);

    DB::table('international_patient_enquiry_form')->insert([
      'name' => $request->input('name'),
      'country_code' => $request->input('country_code'),
      'contact' => $request->input('contact'),
      'email' => $request->input('email'),
      'department' => $request->input('department'),
      'report' => $request->file('report')->store('InternationalPatient', 's3'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return redirect()->route('international_patient')->with('success', 'Request submitted successfully!!');
  }

  public function videoConsultation(Request $request)
  {
    $request->validate([
      'firstname' => 'required|string|max:100',
      'lastname' => 'required|string|max:100',
      'guardian_name' => 'required|string|max:255',
      'country_code' => 'required|integer|numeric',
      'contact' => 'required|string|max:20',
      'email' => 'required|string|email:rfc,strict,dns,filter|max:150',
      'branch' => 'required|string|max:255',
      'coe' => 'required|string|max:255',
      'speciality' => 'required|string|max:255',
      'doctor' => 'required|string|max:255',
      'date' => 'required|date'
    ]);

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
      'date' => $request->input('speciality'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    return redirect()->route('home')->with('success', 'Request submitted successfully!!');
  }
}
