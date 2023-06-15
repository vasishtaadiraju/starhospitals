<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConditionsController extends Controller
{
    function index()
    {
        return view('services-and-treatments.condition');
    }


    function landingPage()
    {
        return view('services-and-treatments.index');
    }
}
