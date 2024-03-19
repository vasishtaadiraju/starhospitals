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
                $query->where('status','active')->orderBy('branches.order_number')->select('branches.id','name','slug','card_image','address','map_link')->take(2);
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
                $query->where('status','active')->orderBy('branches.order_number')->select('branches.id','name','slug','card_image','address','map_link')->take(2);
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
            session(['coe_id'=>$coe_id[0]]);

            $coes= CentreOfExcellence::where('id',$coe_id)->where('status','active')->with(['specialities'=>function($query) use ($content){
                $query->where('status','active')->where('specialities.id','!=',$content->id)->select('specialities.id','name','slug','icon_image');
            }])->get(['id','slug','name']);
            
        }
        else
        {
            abort(404);
        }        
        $tabs = '<div class="scroll_tabs">
        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.0082 0C19.556 0 20 0.44495 20 0.9934V17.0066C20 17.5552 19.5447 18 19.0082 18H0.9918C0.44405 18 0 17.5551 0 17.0066V0.9934C0 0.44476 0.45531 0 0.9918 0H19.0082ZM18 2H2V16H18V2ZM16 12V14H4V12H16ZM10 4V10H4V4H10ZM16 8V10H12V8H16ZM8 6H6V8H8V6ZM16 4V6H12V4H16Z" fill="#004E9E"/>
</svg>

            
        <a href="#overview" class="scroll-to-view">Overview</a>
    </div>
    <div class="scroll_tabs">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M12.0006 15C16.0802 15 19.4466 18.0537 19.9387 22H4.0625C4.55458 18.0537 7.92098 15 12.0006 15ZM10.1875 17.2795C8.75387 17.734 7.54637 18.7133 6.80201 20H12.0006L10.1875 17.2795ZM13.8141 17.2797L12.0006 20H17.1992C16.4549 18.7135 15.2476 17.7342 13.8141 17.2797ZM18.0006 2V8C18.0006 11.3137 15.3143 14 12.0006 14C8.6869 14 6.00061 11.3137 6.00061 8V2H18.0006ZM8.00061 8C8.00061 10.2091 9.79147 12 12.0006 12C14.2098 12 16.0006 10.2091 16.0006 8H8.00061ZM16.0006 4H8.00061L8.0005 6H16.0005L16.0006 4Z" fill="#004E9E"/>
    </svg>
    
            
        <a href="#find-doctors" class="scroll-to-view">Our Doctors</a>
    </div>
    <div class="scroll_tabs">
    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M20.6779 5.97912L19.2637 7.39333L17.1424 5.27201L15.021 7.39333L18.5566 10.9289L17.1424 12.3431L16.4353 11.636L10.0713 17.9999H4.41444L2.29312 20.1213L0.878906 18.707L3.00023 16.5857V10.9289L9.3642 4.56491L8.65708 3.8578L10.0713 2.44359L13.6068 5.97912L15.7281 3.8578L13.6068 1.73648L15.021 0.322266L20.6779 5.97912ZM15.021 10.2218L10.7784 5.97912L9.3642 7.39333L11.4855 9.5147L10.0713 10.9289L7.94997 8.8075L6.53576 10.2218L8.65708 12.3431L7.24287 13.7573L5.12155 11.636L5.00023 11.7573V15.9999H9.2429L15.021 10.2218Z" fill="#004E9E"/>
    </svg>
    
            
        <a href="#treatments-procedures" class="scroll-to-view">Treatment Options</a>
    </div>
    <div class="scroll_tabs">
    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 0V2H2V6C2 8.2091 3.79086 10 6 10C8.2091 10 10 8.2091 10 6V2H8V0H11C11.5523 0 12 0.44772 12 1V6C12 8.9727 9.8381 11.4405 7.0008 11.9169L7 13.5C7 15.433 8.567 17 10.5 17C11.9973 17 13.275 16.0598 13.7749 14.7375C12.7283 14.27 12 13.2201 12 12C12 10.3431 13.3431 9 15 9C16.6569 9 18 10.3431 18 12C18 13.3711 17.0802 14.5274 15.824 14.8854C15.2102 17.252 13.0592 19 10.5 19C7.4624 19 5 16.5376 5 13.5L5.00019 11.9171C2.16238 11.4411 0 8.9731 0 6V1C0 0.44772 0.44772 0 1 0H4ZM15 11C14.4477 11 14 11.4477 14 12C14 12.5523 14.4477 13 15 13C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11Z" fill="#004E9E"/>
    </svg>
    
            
        <a href="#consult-us"  class="scroll-to-view">FAQs</a>
    </div>';
    $breadcrum = "<div class='banner__breadcrum'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Specialities</a>
    <span>❯</span>
    
    <a href='#'>{$content->name}</a>
</div>";

        session(['branch_id'=>'Hyderabad']);
        return view('speciality', [
            'content' => $content,
            'breadcrum'=>$breadcrum,
            'tabs'=>$tabs,
            'coes'=>$coes,
        ]);
    }
}
