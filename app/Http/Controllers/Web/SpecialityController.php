<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CentreOfExcellence;
use App\Models\CoeSpeciality;
use App\Models\Speciality;
use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    function index($slug)
    {

        $content = null;
        $coes = [];

        if(CentreOfExcellence::where('slug',$slug)->where('status','active')->exists())
        {
            $content = CentreOfExcellence::where('status','active')->where('slug',$slug)->with(['branches'=>function($query){
                $query->where('status','active')->orderBy('branches.order_number')->select('branches.id','name','slug','card_image','address')->take(2);
            },'faqs','blogs'=>function($query){
                $query->where('status','active')->orderBy('blog_coe.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
            },'media'=>function($query){
                $query->where('status','active')->orderBy('coe_media.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
            },'testimonials'=>function($query){
                $query->where('status','active')->orderBy('coe_testimonial.order_number');
            },
            'specialities'=>function($query){
                $query->where('status','active')->select('specialities.id');
            }])->first();

            // dd($slug);
            $content->page_type = 'Coe';
            session(['coe_id'=>$content->id]);
            if(count($content->specialities) > 0)
            {
                abort(404);
            }
        }
        else if(Speciality::where('slug',$slug)->where('status','active')->exists())
        {
            
            $content = Speciality::where('status','active')->where('slug',$slug)->with(['branches'=>function($query){
                $query->where('status','active')->orderBy('branches.order_number')->select('branches.id','name','slug','card_image','address')->take(2);
            },'faqs','blogs'=>function($query){
                $query->where('status','active')->orderBy('blog_speciality.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
            },'media'=>function($query){
                $query->where('status','active')->orderBy('media_speciality.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
            },'testimonials'=>function($query){
                $query->where('status','active')->orderBy('speciality_testimonial.order_number');
            }])->first();
            $content->page_type = 'speciality';
            session(['speciality_id'=>$content->id]);

            $coe_id= CoeSpeciality::where('speciality_id',$content->id)->pluck('coe_id');

            $coes= CentreOfExcellence::where('id',$coe_id)->where('status','active')->with(['specialities'=>function($query) use ($content){
                $query->where('status','active')->where('specialities.id','!=',$content->id)->select('specialities.id','name','slug','icon_image');
            }])->get(['id','slug','name']);
            // dd($coes);
        }
        else
        {
            abort(404);
        }        
        $tabs = '<div class="scroll_tabs">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.0082 3C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082ZM20 5H4V19H20V5ZM18 15V17H6V15H18ZM12 7V13H6V7H12ZM18 11V13H14V11H18ZM10 9H8V11H10V9ZM18 7V9H14V7H18Z" fill="white"/>
            </svg>
            
        <a href="#overview" class="scroll-to-view">Overview</a>
    </div>
    <div class="scroll_tabs">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.0006 15C16.0802 15 19.4466 18.0537 19.9387 22H4.0625C4.55458 18.0537 7.92098 15 12.0006 15ZM10.1875 17.2795C8.75387 17.734 7.54637 18.7133 6.80201 20H12.0006L10.1875 17.2795ZM13.8141 17.2797L12.0006 20H17.1992C16.4549 18.7135 15.2476 17.7342 13.8141 17.2797ZM18.0006 2V8C18.0006 11.3137 15.3143 14 12.0006 14C8.6869 14 6.00061 11.3137 6.00061 8V2H18.0006ZM8.00061 8C8.00061 10.2091 9.79147 12 12.0006 12C14.2098 12 16.0006 10.2091 16.0006 8H8.00061ZM16.0006 4H8.00061L8.0005 6H16.0005L16.0006 4Z" fill="white"/>
            </svg>
            
        <a href="#find-doctors" class="scroll-to-view">Find Doctors</a>
    </div>
    <div class="scroll_tabs">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.6779 7.97912L20.2637 9.39333L18.1424 7.27201L16.021 9.39333L19.5566 12.9289L18.1424 14.3431L17.4353 13.636L11.0713 19.9999H5.41444L3.29312 22.1213L1.87891 20.707L4.00023 18.5857V12.9289L10.3642 6.56491L9.65708 5.8578L11.0713 4.44359L14.6068 7.97912L16.7281 5.8578L14.6068 3.73648L16.021 2.32227L21.6779 7.97912ZM16.021 12.2218L11.7784 7.97912L10.3642 9.39333L12.4855 11.5147L11.0713 12.9289L8.94997 10.8075L7.53576 12.2218L9.65708 14.3431L8.24287 15.7573L6.12155 13.636L6.00023 13.7573V17.9999H10.2429L16.021 12.2218Z" fill="white"/>
            </svg>
            
        <a href="#treatments-procedures" class="scroll-to-view">Treatments & Procedures</a>
    </div>
    <div class="scroll_tabs">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 3V5H6V9C6 11.2091 7.79086 13 10 13C12.2091 13 14 11.2091 14 9V5H12V3H15C15.5523 3 16 3.44772 16 4V9C16 11.9727 13.8381 14.4405 11.0008 14.9169L11 16.5C11 18.433 12.567 20 14.5 20C15.9973 20 17.275 19.0598 17.7749 17.7375C16.7283 17.27 16 16.2201 16 15C16 13.3431 17.3431 12 19 12C20.6569 12 22 13.3431 22 15C22 16.3711 21.0802 17.5274 19.824 17.8854C19.2102 20.252 17.0592 22 14.5 22C11.4624 22 9 19.5376 9 16.5L9.00019 14.9171C6.16238 14.4411 4 11.9731 4 9V4C4 3.44772 4.44772 3 5 3H8ZM19 14C18.4477 14 18 14.4477 18 15C18 15.5523 18.4477 16 19 16C19.5523 16 20 15.5523 20 15C20 14.4477 19.5523 14 19 14Z" fill="white"/>
            </svg>
            
        <a href="#consult-our-expert" class="scroll-to-view">Consult our Expert</a>
    </div>';
    $breadcrum = "<div class='banner__breadcrum'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Specialities</a>
    <span>❯</span>
    
    <a href='#'>{$content->name}</a>
</div>";
        return view('speciality', [
            'content' => $content,
            'breadcrum'=>$breadcrum,
            'tabs'=>$tabs,
            'coes'=>$coes,
        ]);
    }
}
