<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Http;
use Illuminate\Http\Request;

class HisApiController extends Controller
{
//     "request_date": "string",
//   "department_id": "string",
//   "doctor_id": "string",
//   "location_id": "string"
    function check_availability(Request $request)
    {

        try {
            $response = Http::withToken(config('variables.token'))->post('https://api.starhs.in/starhs-portal-api/public/appointments/check-availability', $request->all());
            return response($response->json(), $response->status());
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }



    }

    function patients(Request $request)
    {

        try {
            $response = Http::withToken(config('variables.token'))->get('https://api.starhs.in/kranium-health-api/public/api/v1/patients/' . $request->mobile);
            return response($response->json(),$response->status());
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }
    }


//     "title": "string",
//   "first_name": "string",
//   "last_name": "string",
//   "age": "string",
//   "gender": "string",
//   "mobile": "string",
//   "address": "string",
//   "request_from": "string"
    function register_patients(Request $request)
    {

        try {
            $response = Http::withToken(config('variables.token'))->post('https://api.starhs.in/kranium-health-api/public/api/v1/patients/pre-register', $request->all());
            return response($response->json(),$response->status());
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }
    }


    // Request Parameters
    //"mobile_no": "string"
    function send_otp(Request $request)
    {


        try {
            $response = Http::withToken(config('variables.token'))->post('https://api.starhs.in/kranium-health-api/public/api/v1/patients/send-otp', $request->all());
            return response($response->json(),$response->status());
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }
    }

    //    Request Parameter
    //    "mobile_no": "string",
    //    "request_id": 0,
    //    "otp": 0
    function verify_otp(Request $request)
    {

        try {
            $response = Http::withToken(config('variables.token'))->post('https://api.starhs.in/kranium-health-api/public/api/v1/patients/verify-otp', $request->all());
            return response($response->json(),$response->status());
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }
    }


//     "patient_id": "string",
//   "is_existing_patient": true,
//   "doctor_id": "string",
//   "department_id": "string",
//   "location_id": "string",
//   "appointment_type": "string",
//   "appointment_date_time": "string",
//   "booking_from": "string"
    function book_appointment(Request $request)
    {

        try {
            $response = Http::withToken(config('variables.token'))->post('https://api.starhs.in/kranium-health-api/public/api/v1/appointments/book-appointment', $request->all());
            return response($response->json(),$response->status());
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);
        }
    }
}