<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Doctor;
use App\Models\Speciality;
use Http;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function index($branch_slug,$speciality_slug,$slug)
    {
        // dd($branch_slug);
        $content = Doctor::where('status', 'active')->where('slug',$slug)->whereHas('branches', function ($query) use ($branch_slug) {
            $query->where('branches.slug', $branch_slug);
            })->whereHas('specialities', function ($query) use ($speciality_slug) {
                            $query->where('specialities.doctor_slug', $speciality_slug);
                        })->with([
            'coes' => function ($query) {
                $query->with([
                    'specialities' => function ($query) {
                        $query->where('status', 'active')->select('specialities.id', 'name');
                    }
                ])->select('centre_of_excellences.id', 'name');
            },
            'branches' => function ($query) {
                $query->select('name','slug');
            },
            'specialities' => function ($query) {
                $query->where('status', 'active')->with([
                    'coes' => function ($query) {
                        $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
                    }
                ])->select('specialities.id', 'name');
            },
            'blogs' => function ($query) {
                $query->orderBy('blog_doctor.order_number')->select('title', 'author', 'image', 'image_alt', 'slug', 'published_date');
            },
            'media' => function ($query) {
                $query->where('status', 'active')->orderBy('doctor_media.order_number')->select('media.id', 'title', 'media_name', 'image', 'image_alt', 'media_link', 'published_date', 'slug');
            },
            'testimonials' => function ($query) {
                $query->where('status', 'active')->orderBy('doctor_testimonial.order_number');
            }
        ])->first();
            // dd($content);
        $branch = Branch::where('status','active')->where('slug',$branch_slug)->first(['id','name']);
        $speciality = Speciality::where('status','active')->where('doctor_slug',$speciality_slug)->first(['id','name','doctor_slug','slug']);

        if($content == null)
        {
            abort(404); 
        }
        $breadcrum = "<div class='banner__breadcrum banner__breadcrum--blue'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a href='#'>Doctors</a>
    <span>❯</span>
    <a href='/locations/{$branch_slug}'>{$branch->name}</a>
    <span>❯</span>
    <a href='/specialities/{$speciality->slug}'>{$speciality->name}</a>
    <span>❯</span>
    <a href='#'>{$content->name}</a>
</div>";
        return view('doctor-profile', [
            'content' => $content,
            'breadcrum' => $breadcrum,
            'branch_slug' => $branch_slug,
            'speciality_slug' => $speciality_slug,
        ]);
    }


    function consultation($branch_slug,$speciality_slug,$slug)
    {
        $content = Doctor::where('status', 'active')->where('slug',$slug)->whereHas('branches', function ($query) use ($branch_slug) {
            $query->where('branches.slug', $branch_slug);
            })->whereHas('specialities', function ($query) use ($speciality_slug) {
                            $query->where('specialities.doctor_slug', $speciality_slug);
                        })->with([
            'coes' => function ($query) {
                $query->with([
                    'specialities' => function ($query) {
                        $query->where('status', 'active')->select('specialities.id', 'name');
                    }
                ])->select('centre_of_excellences.id', 'name');
            },
            'branches' => function ($query) {
                $query->select('name','slug','his_id');
            },
            'specialities' => function ($query) {
                $query->where('status', 'active')->with([
                    'coes' => function ($query) {
                        $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
                    }
                ])->select('specialities.id', 'name','slug','his_id');
            },
        ])->first();
            // dd($content);
        $branch = Branch::where('status','active')->where('slug',$branch_slug)->first(['id','name','slug']);
        $speciality = Speciality::where('status','active')->where('doctor_slug',$speciality_slug)->first(['id','name','doctor_slug','slug']);

        if($content == null)
        {
            abort(404); 
        }


        $breadcrum = "<div class='banner__breadcrum banner__breadcrum--blue' style='margin-top:1.5rem;margin-left:5%;font-family:Plus Jakarta Sans;font-size:13px'>
    <a href='/'>Home</a>
    <span>❯</span>
    <a href='#'>Book an Appointment</a>
    <span>❯</span>
    <a href='{/locations/{$branch->slug}}'>{$branch->name}</a>
    <span>❯</span>
    <a href='/specialities/{$speciality->slug}'>{$speciality->name}</a>
    <span>❯</span>
    <a href='#'>{$content->name}</a>
</div>";




       
           



    
        return view('book-an-appointment.physical-consultation', [
            'content' => $content,
            'breadcrum' => $breadcrum,
            'branch_slug' => $branch_slug,
            'speciality_slug' => $speciality_slug,
        ]);
    }
}