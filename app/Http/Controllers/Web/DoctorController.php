<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function index()
    {

        $breadcrum = "<div class='banner__breadcrum'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Doctor</a>
</div>";
        return view('doctor-profile',[
            'breadcrum'=>$breadcrum,
        ]);
    }
}