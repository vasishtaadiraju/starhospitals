<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index($slug)
    {
        $content = Branch::where('status', 'active')->where('slug', $slug)->with([
            'coes' => function ($query) {
                $query->where('status', 'active')->with(['specialities'=>function($query){
                    $query->where('status','active')->select('specialities.id','name','slug','icon_image');
                }])->where('status','active')->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
            },
            'faqs',
            'blogs' => function ($query) {
                $query->where('status', 'active')->orderBy('blog_branch.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
            },
            'media' => function ($query) {
                $query->where('status', 'active')->orderBy('branch_media.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
            },
            'testimonials' => function ($query) {
                $query->where('status', 'active')->orderBy('branch_testimonial.order_number');
            }
        ])->first();

        // return response($content);

        // return response($content);
        if ($content == null) {
            return abort(404);
        }
        $content->page_type = 'Branch';

        session(['branch_id' => $content->id]);

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
    
            
        <a href="#our-doctors">Our Doctors</a>
    </div>
    <div class="scroll_tabs">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M18.3643 10.9792C19.9264 12.5413 19.9264 15.0739 18.3643 16.636L12.7075 22.2929C12.317 22.6834 11.6838 22.6834 11.2933 22.2929L5.63642 16.636C4.07432 15.0739 4.07432 12.5413 5.63642 10.9792C7.19851 9.41709 9.73117 9.41709 11.2933 10.9792L11.9997 11.6856L12.7075 10.9792C14.2696 9.41709 16.8022 9.41709 18.3643 10.9792ZM7.05063 12.3934C6.26958 13.1744 6.26958 14.4408 7.05063 15.2218L12.0004 20.1716L16.9501 15.2218C17.7312 14.4408 17.7312 13.1744 16.9501 12.3934C16.1691 11.6123 14.9027 11.6123 14.1203 12.3948L11.9983 14.5126L9.87906 12.3934C9.09801 11.6123 7.83168 11.6123 7.05063 12.3934ZM12.0004 1C14.2095 1 16.0004 2.79086 16.0004 5C16.0004 7.20914 14.2095 9 12.0004 9C9.79124 9 8.00038 7.20914 8.00038 5C8.00038 2.79086 9.79124 1 12.0004 1ZM12.0004 3C10.8958 3 10.0004 3.89543 10.0004 5C10.0004 6.10457 10.8958 7 12.0004 7C13.1049 7 14.0004 6.10457 14.0004 5C14.0004 3.89543 13.1049 3 12.0004 3Z" fill="white"/>
    </svg>
    
            
        <a href="#patient-reviews" class="scroll-to-view">Patient Reviews</a>
    </div>';

        $breadcrum = "<div class='banner__breadcrum'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a href='#'>Locations</a>
    <span>❯</span>
    <a href='#'>{$content->name}</a>
</div>";
        return view('branch', [
            'content' => $content,
            'tabs' => $tabs,
            'breadcrum'=>$breadcrum,
        ]);
    }
}