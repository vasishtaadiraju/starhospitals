<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\InternationalPatient;
use Illuminate\Http\Request;

class InternationalPatientController extends Controller
{
    function index()
    {
        $content = InternationalPatient::first();

        return view('international-patients',[
            'content' => $content]);
    }
}
