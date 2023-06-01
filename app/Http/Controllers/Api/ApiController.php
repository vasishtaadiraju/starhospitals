<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class ApiController extends Controller
{

    function getDoctorSuggetion(Request $request)
    {

        try {
            $name = $request->text;
            $user = User::where('status', 'active')->where(function ($query) use ($name) {
                $question = 'querty';

                if (!empty($name)) {
                    $question = $name;
                }
                ;
                $words = explode(' ', str_replace('.', ' ', strtolower($question)));
                // dd($words);
                $query->where('name', "like", '%' . $name . "%");
                foreach ($words as $key => $word) {


                    $query->orWhere('name', "like", $word . "%");


                }
            })->select('id', 'name')->take(10)->get();
            return response($user, 200);
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }

    }

    function getDoctorByBranchCoeSpeciality(Request $request)
    {

        try {
            
            $branch_id = $request->branch_id;
            $coe_id = $request->coe_id;
            // $speciality_id = $request->speciality_id;
            $doctors = [];
            $user_query = User::query();
            // $pagination = $user_query->paginate(10);
            if ($coe_id != null) {
                $user_query->whereHas('coes', function ($query) use ($coe_id) {
                    $query->where('centre_of_excellences.id', $coe_id);
                });
            }

            if ($branch_id != null) {
                $user_query->whereHas('branches', function ($query) use ($branch_id) {
                    $query->where('branches.id', $branch_id);
                });
            }
            $doctors = $user_query->with([
                'coes' => function ($query) {
                    $query->select('name');
                },
                'branches' => function ($query) {
                    $query->select('name');
                }
            ])->join('branch_user','users.id' , '=' , 'branch_user.user_id')->orderBy('order_number','DESC')->get(['users.id', 'name', 'slug','designation','branch_user.order_number','large_image'])->unique()->take(20);

                // if()
            return response($doctors, 200);
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }

    }

    function getCOE(Request $request)
    {
        try {
            $coe_id = $request->coe_id;
            $coe = CentreOfExcellence::where('status','active')->where('id',$coe_id)->first();

        return response($coe,200);
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage(),500);
        }
        
    }
}