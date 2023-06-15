<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function index($slug)
    {

        $content = Doctor::where('status','active')->where('slug',$slug)->with([
            'coes' => function ($query) {
                $query->with([
                    'specialities' => function ($query) {
                        $query->where('status', 'active')->select('specialities.id', 'name');
                    }
                ])->select('centre_of_excellences.id', 'name');
            },
            'branches' => function ($query) {
                $query->select('name');
            },
            'specialities' => function ($query) {
                $query->where('status', 'active')->with([
                    'coes' => function ($query) {
                        $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
                    }
                ])->select('specialities.id', 'name');
            },
            'blogs'=>function($query){
                $query->orderBy('blog_doctor.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
            },'media'=>function($query){
                $query->where('status','active')->orderBy('doctor_media.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
            },'testimonials'=>function($query){
                $query->where('status','active')->orderBy('doctor_testimonial.order_number');
            }
        ])->first();
        
        $breadcrum = "<div class='banner__breadcrum banner__breadcrum--blue'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Doctor</a>
    <span>❯</span>
    <a href='#'>{$content->name}</a>
</div>";
        return view('doctor-profile',[
            'content'=>$content,
            'breadcrum'=>$breadcrum,
        ]);
    }
}