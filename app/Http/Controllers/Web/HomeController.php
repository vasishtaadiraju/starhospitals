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
        $blogs = Blog::where('homepage', 'yes')->with(['coes'=>function($query){
            $query->select('name');
        }])->where('status', 'active')->get(['title', 'author', 'image', 'image_alt', 'slug', 'published_date']);
        $media = Media::where('homepage', 'yes')->where('status', 'active')->get(['id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug']);
        $reviews = Testimonial::where('homepage', 'yes')->where('status', 'active')->get(['id','title','type','image','image_alt','thumbnail','video_link','slug']);
        if($content == null)
        {
            abort(404);
        }
        return view('home', [
            'content' => $content,
            'blogs' => $blogs,
            'media' => $media,
            'reviews'=>$reviews,
        ]);
    }
}