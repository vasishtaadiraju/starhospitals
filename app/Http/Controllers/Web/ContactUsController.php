<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Branch;
use App\Models\FAQ;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index()
    {
        $about = AboutUs::select('banner_desktop')->first();
        $faqs = Faq::where('contactpage', 'yes')->get();
        $branches = Branch::where('status','active')->get();
        return view('contact-us', [
            'about' => $about,
            'faqs' => $faqs,
            'branches' => $branches
        ]);
    }
}
