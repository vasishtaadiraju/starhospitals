<?php

namespace App\Http\Controllers\Web;

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
        $breadcrum = "<div class='banner__breadcrum'>
        <a href='#'>Home</a>
        <span>❯</span>
        <a href='#'>International Patients</a>
    </div>";
        return view('international-patients',[
            'faqs'=>$faqs,
            'breadcrum'=>$breadcrum,
            'content' => $content,
        ]);
    }
}
