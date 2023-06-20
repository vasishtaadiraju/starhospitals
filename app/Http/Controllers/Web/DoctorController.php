<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function index($branch_slug,$speciality_slug,$slug)
    {
        // dd($branch_slug);
        $content = Doctor::where('status', 'active')->where('slug', $slug)->whereHas('branches', function ($query) use ($branch_slug) {
            $query->where('branches.slug', $branch_slug);
            })->whereHas('specialities', function ($query) use ($speciality_slug) {
                            $query->where('specialities.slug', $speciality_slug);
                        })->orWhereHas('coes', function ($query) use ($speciality_slug) {
                            $query->where('centre_of_excellences.slug', $speciality_slug);
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

        if($content == null)
        {
            abort(404); 
        }
        $breadcrum = "<div class='banner__breadcrum banner__breadcrum--blue'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Doctor</a>
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


    function videoConsultation()
    {
        // $content = Doctor::where('status', 'active')->where('slug', $slug)->with([
        //     'coes' => function ($query) {
        //         $query->with([
        //             'specialities' => function ($query) {
        //                 $query->where('status', 'active')->select('specialities.id', 'name');
        //             }
        //         ])->select('centre_of_excellences.id', 'name');
        //     },
        //     'branches' => function ($query) {
        //         $query->select('name');
        //     },
        //     'specialities' => function ($query) {
        //         $query->where('status', 'active')->with([
        //             'coes' => function ($query) {
        //                 $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
        //             }
        //         ])->select('specialities.id', 'name');
        //     }
        // ])->first();


        $breadcrum = "<div class='banner__breadcrum banner__breadcrum--blue' style='margin-top:1.5rem;margin-left:5%;font-family:Plus Jakarta Sans;font-size:13px'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Doctor</a>
    <span>❯</span>
    <a href='#'>Book a Video Consultation</a>
</div>";
        return view('book-an-appointment.video-consultation', [
            // 'content' => $content,
            'breadcrum' => $breadcrum,
        ]);
    }
}