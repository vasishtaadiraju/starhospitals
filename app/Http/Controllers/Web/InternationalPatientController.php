<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\InternationalPatient;
use Illuminate\Http\Request;

class InternationalPatientController extends Controller
{
    function index()
    {
        $content = InternationalPatient::first();
        $faqs = FAQ::where('internationalpage','yes')->get();
        return view('international-patients',[
            'faqs'=>$faqs,
            'content' => $content,
        ]);
    }
}
