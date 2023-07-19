<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CoeSpeciality;
use App\Models\Specialist;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    function index($slug){

        $content = Specialist::where('slug',$slug)->with(['speciality','branch','region','faqs','testimonials'])->first();
        $content->page_type = 'Specialist';
        $breadcrum = "<div class='banner__breadcrum'>
        <a href='/'>Home</a>
        <span>❯</span>
        <a href='#'>Team</a>
        <span>❯</span>
        <a href='#'>{$content->title}</a>
    </div>";

        

    $coe_id= CoeSpeciality::where('speciality_id',$content->speciality_id)->pluck('coe_id');
            session(['coe_id'=>$coe_id[0]]);
            session(['branch_id' => $content->branch_id]);
            session(['speciality_id'=>$content->speciality_id]);
            $branches = Branch::whereHas('specialists',function($query) use ($content){
                $query->where('speciality_id',$content->speciality_id);
            })->where('status','active')->get(['id','name','slug']);
    
            if($content->region_id != null)
            {
                session(['branch_id' => 'hyderabad']);
            }

        return view('specialist',[
            'breadcrum'=>$breadcrum,
            'content'=>$content,
            'branches'=>$branches,
        ]);
    }
}
