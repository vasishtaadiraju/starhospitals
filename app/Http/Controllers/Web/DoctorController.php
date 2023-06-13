<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    function index($slug)
    {

        $content = User::where('status','active')->where('slug',$slug)->with([
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
            }
        ])->first();
        $breadcrum = "<div class='banner__breadcrum'>
    <a href='#'>Home</a>
    <span>❯</span>
    <a href='#'>Doctor</a>
</div>";
        return view('doctor-profile',[
            'content'=>$content,
            'breadcrum'=>$breadcrum,
        ]);
    }
}