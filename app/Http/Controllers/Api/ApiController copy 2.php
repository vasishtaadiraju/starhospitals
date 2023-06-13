<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\User;
use DB;
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
            $pagination = null;

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

            if($branch_id  == null)
            {
                $user_query->whereHas('branches', function ($query) {
                    $query->where('branches.id',1);
                });
            }
            $user_query->with([
                'coes' => function ($query) {
                    $query->select('name');
                },
                'branches' => function ($query) {
                    $query->select('name');
                }
            ]);
            if ($request->paginate == true) {

                // $ids =  $user_query->distinct()->pluck('users.id');
                // ->whereIn('users.id',$ids)
                $pagination = $user_query->join('branch_user', 'users.id', '=', 'branch_user.user_id')->distinct(['users.id'])->orderBy('branch_user.order_number')->select('users.id','name','designation','experience')->paginate(9);
            }
            else
            {
            
            $doctors = $user_query->join('branch_user', 'users.id', '=', 'branch_user.user_id')->orderBy('branch_user.order_number','DESC')->get(['users.id', 'name', 'slug', 'designation', 'branch_user.order_number', 'large_image'])->unique()->take(20);

            }

            if ($request->paginate == true) {
                return response($pagination, 200);

            } else {
                return response($doctors, 200);

            }
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }

    }

    function getCOE(Request $request)
    {
        try {
            $coe_id = $request->coe_id;
            $coe = CentreOfExcellence::where('status', 'active')->where('id', $coe_id)->first();

            return response($coe, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage(), 500);
        }

    }

    function getBranchCoeSpecialityById(Request $request)
    {
        $coe_id = $request->coe_id;
        $branch_id = $request->branch_id;
        $response = [];
        if ($coe_id != null) {
            $response = CentreOfExcellence::where('status', 'active')->where('id', $coe_id)->with([
                'branches' => function ($query) {
                    $query->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug', 'address', 'card_image')->take(2);
                }
            ])->first('id');
        } elseif ($branch_id != null) {
            $response = Branch::where('status', 'active')->where('id', $branch_id)->with([
                'coes' => function ($query) {
                    $query->where('status', 'active')->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                }
            ])->first('id');
        }

        return response($response,200);
    }
}