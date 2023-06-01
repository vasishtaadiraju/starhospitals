<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\CentreOfExcellence;
use Illuminate\Http\Request;

class CoeController extends Controller
{
    function index($slug)
    {
        $content = CentreOfExcellence::where('status','active')->where('slug',$slug)->with(['branches'=>function($query){
            $query->where('status','active')->orderBy('branches.order_number')->select('branches.id','name','slug','address','card_image')->take(2);
        },'faqs','blogs'=>function($query){
            $query->where('status','active')->orderBy('blog_coe.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
        },'media'=>function($query){
            $query->where('status','active')->orderBy('coe_media.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
        },'testimonials'=>function($query){
            $query->where('status','active')->orderBy('coe_testimonial.order_number');
        }])->first();

        // return response($content);
        if($content == null)
        {
            return abort(404);
        }
        $content->page_type = 'Coe';


        return view('coe', [
            'content' => $content,
        ]);
    }
}
