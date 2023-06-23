<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    
    function index()
    {
        $faqs = FAQ::where('careerpage','yes')->get();
        $breadcrum = "<div class='banner__breadcrum'>
        <a href='#'>Home</a>
        <span>❯</span>
        <a href='#'>Career</a>
    </div>";

        return view('careers',[
            'faqs'=>$faqs,
            'breadcrum'=>$breadcrum,
        ]);
    }
}
