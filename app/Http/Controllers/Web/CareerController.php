<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    
    function index()
    {
        $faqs = FAQ::where('careerpage','yes')->get();
        return view('careers',[
            'faqs'=>$faqs,
        ]);
    }
}
