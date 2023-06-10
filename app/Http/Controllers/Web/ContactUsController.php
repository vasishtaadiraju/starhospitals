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
        $breadcrum = "<div class='banner__breadcrum'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Contact Us</a>
</div>";
        return view('contact-us', [
            'about' => $about,
            'faqs' => $faqs,
            'breadcrum'=>$breadcrum,
            'branches' => $branches
        ]);

        
    }
}
