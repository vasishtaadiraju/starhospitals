<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index($slug)
    {
        $content = Branch::where('status','active')->where('slug',$slug)->with(['coes'=>function($query){
            $query->where('status','active')->select('centre_of_excellences.id','name','slug','icon_image')->take(2);
        },'faqs','blogs'=>function($query){
            $query->where('status','active')->orderBy('blog_branch.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
        },'media'=>function($query){
            $query->where('status','active')->orderBy('branch_media.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
        },'testimonials'=>function($query){
            $query->where('status','active')->orderBy('branch_testimonial.order_number');
        }])->first();

        // return response($content);
        if($content == null)
        {
            return abort(404);
        }
        $content->page_type = 'Branch';


        return view('branch', [
            'content' => $content,
        ]);
    }
}
