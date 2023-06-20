<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionsController extends Controller
{
    function index($slug)
    {
      
        $content = Condition::where('diagnosis_treatment_slug',$slug)->orWhere('symptoms_causes_slug',$slug)->orWhere('doctors_departments_slug',$slug)->orWhere('care_at_star_hospitals_slug',$slug)->with(['coes'=>function($query){
                $query->where('status','active')->select('centre_of_excellences.id','name','slug');
        }])->first();

        $coes = [];
        $branches = [];
        if($content->diagnosis_treatment_slug == $slug && $content->diagnosis_treatment != null && request()->route()->getName() == 'condition')
        {
           
            $content->type = 'diagnosis';
        }
        else if($content->doctors_departments_slug == $slug && request()->route()->getName() == 'department')
        {
            
            $content->type = 'department';
            $coes = CentreOfExcellence::whereHas('conditions',function ($query) use($content){
                $query->where('conditions.id',$content->id);
            })->where('status','active')->with(['specialities'=>function ($query) use($content){
                $query->where('specialities.id',$content->id)->where('status','active');
            },])->get(['id','name']);

            // return response($coes);
            $branches = Branch::where('status','active')->get(['id','name']);
        }
        else if($content->care_at_star_hospitals_slug == $slug && $content->care_at_star_hospitals != null  && request()->route()->getName() == 'care')
        {
            
            $content->type = 'care';
        }
        else{
            abort(404);
        }
        // dd();
        return view('services-and-treatments.condition',[
            'content'=>$content,
            'coes'=>$coes,
            'branches'=>$branches,
        ]);
    }


    function landingPage()
    {
        $coes = CentreOfExcellence::get(['id','name']);
        return view('services-and-treatments.index',[
            'coes'=>$coes,
        ]);
    }
}
