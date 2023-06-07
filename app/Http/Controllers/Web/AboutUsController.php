<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Branch;
use App\Models\FAQ;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function index()
    {
        $about = AboutUs::first();
        $branches = Branch::where('status','active')->get();
        $faqs = Faq::where('aboutpage','yes')->get();

        return view('about', [
            'about' => $about,
            'branches' => $branches,
            'faqs' => $faqs
        ]);
    }
}
