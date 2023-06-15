<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\Homepage;
use App\Models\Media;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $content = Homepage::first();
        // $coes = CentreOfExcellence::where('status','active')->orderBy('order_number')->get(['id', 'name', 'icon_image']);
        $blogs = Blog::where('homepage','yes')->with(['coes'=>function($query){
            $query->select(['centre_of_excellences.id','name']);
        }])->where('status', 'active')->get(['blogs.id','title', 'author', 'image', 'image_alt', 'slug', 'published_date']);
        $media = Media::where('homepage', 'yes')->where('status', 'active')->get(['id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug']);
        $reviews = Testimonial::where('homepage', 'yes')->where('status', 'active')->get(['id','image','image_alt','video_link','patient_name','text']);
        if($content == null)
        {
            abort(503);
        }

        session()->forget('coe_id');
        session()->forget('branch_id');

        
        return view('home', [
            'content' => $content,
            'blogs' => $blogs,
            'media' => $media,
            'reviews'=>$reviews,
        ]);
    }
}