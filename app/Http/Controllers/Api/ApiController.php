<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\Condition;
use App\Models\Doctor;
use App\Models\DoctorOrder;
use App\Models\Specialist;
use App\Models\Speciality;
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
            $user = Doctor::where('status', 'active')->where(function ($query) use ($name) {
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
            })->with([
                'coes' => function ($query) {
                    $query->with([
                        'specialities' => function ($query) {
                            $query->where('status', 'active')->select('specialities.id', 'name','doctor_slug');
                        }
                    ])->select('centre_of_excellences.id', 'name','slug');
                },
                'branches' => function ($query) {
                    $query->select('branches.id','name','slug');
                },
                'specialities' => function ($query) {
                    $query->where('status', 'active')->with([
                        'coes' => function ($query) {
                            $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
                        }
                    ])->select('specialities.id', 'name','slug','doctor_slug');
                }
            ])->select('id', 'name','slug')->take(10)->get();
            return response($user, 200);
        } catch (\Throwable $th) {
            return response($th->getMessage(), 500);

        }

    }

    // function getDoctorByBranchCoeSpeciality(Request $request)
    // {

    //     try {

    //         $branch_id = $request->branch_id;
    //         $coe_id = $request->coe_id;
    //         $speciality_id = $request->speciality_id;
    //         $doctors = [];
    //         $user_query = Doctor::query();
    //         $pagination = null;

    //         if ($coe_id != null) {
    //             $user_query->whereHas('coes', function ($query) use ($coe_id) {
    //                 $query->where('centre_of_excellences.id', $coe_id);
    //             });
    //         }
    //         if ($speciality_id != null) {
    //             $user_query->whereHas('specialities', function ($query) use ($speciality_id) {
    //                 $query->where('specialities.id', $speciality_id);
    //             });
    //         }

    //         if ($branch_id != null) {
    //             $user_query->whereHas('branches', function ($query) use ($branch_id) {
    //                 $query->where('branches.id', $branch_id);
    //             });
    //         }

    //         if ($branch_id == null) {
    //             $user_query->whereHas('branches', function ($query) {
    //                 $query->where('branches.id', 1);
    //             });
    //         }
    //         $user_query->with([
    //             'coes' => function ($query) {
    //                 $query->with([
    //                     'specialities' => function ($query) {
    //                         $query->where('status', 'active')->select('specialities.id', 'name');
    //                     }
    //                 ])->select('centre_of_excellences.id', 'name');
    //             },
    //             'branches' => function ($query) {
    //                 $query->select('name');
    //             },
    //             'specialities' => function ($query) {
    //                 $query->where('status', 'active')->with([
    //                     'coes' => function ($query) {
    //                         $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
    //                     }
    //                 ])->select('specialities.id', 'name');
    //             }
    //         ]);
    //         if ($request->paginate == true) {

    //             $ids = $user_query->distinct()->pluck('doctors.id');
    //             $pagination = $user_query->whereIn('doctors.id', $ids)->join('branch_doctor', 'doctors.id', '=', 'branch_doctor.doctor_id')->distinct('branch_doctor.doctor_id')->select(['doctors.id','name','designation','experience','large_image'])->paginate(9);
    //             // $pagination = $user_query->whereIn('doctors.id', $ids)->join('branch_doctor', 'doctors.id', '=', 'branch_doctor.user_id')->distinct('branch_doctor.user_id')->select(['doctors.id','name','designation','experience','large_image'])->paginate(9);
    //         } else {

    //             $doctors = $user_query->join('branch_doctor', 'doctors.id', '=', 'branch_doctor.doctor_id')->orderBy('branch_doctor.order_number', 'DESC')->get(['doctors.id', 'name', 'slug', 'designation', 'branch_doctor.order_number','small_image'])->unique()->take(20);

    //         }

    //         if ($request->paginate == true) {
    //             return response($pagination, 200);

    //         } else {
    //             return response($doctors, 200);

    //         }
    //     } catch (\Throwable $th) {
    //         return response($th->getMessage(), 500);

    //     }

    // }


    function getDoctorByBranchCoeSpeciality(Request $request)
    {
        $branch_id = $request->branch_id;
        $coe_id = $request->coe_id;
        $speciality_id = $request->speciality_id;
        $response = [];
        $doctor_query = DoctorOrder::with([
            'doctor' => function ($query) {
                $query->with([
                    'coes' => function ($query) {
                        $query->where('status','active')->with([
                            'specialities' => function ($query) {
                                $query->where('status', 'active')->select('specialities.id', 'name','doctor_slug');
                            }
                        ])->select('centre_of_excellences.id', 'name','slug');
                    },
                    'branches' => function ($query) {
                        $query->select('branches.id','name','slug');
                    },
                    'specialities' => function ($query) {
                        $query->where('status', 'active')->with([
                            'coes' => function ($query) {
                                $query->select('centre_of_excellences.id')->pluck('centre_of_excellences.id');
                            }
                        ])->select('specialities.id', 'name','slug','doctor_slug');
                    }
                ])->where('status','active')->select('id', 'name', 'slug', 'designation', 'small_image', 'large_image','experience','fee','his_id','video_consultation');
            }
        ])->orderBy(DB::raw('ISNULL(doctor_orders.order_number), doctor_orders.order_number'), 'ASC');
        
        $speciality_id == null ? $doctor_query->where('coe_id',$coe_id) : $doctor_query->where('speciality_id',$speciality_id);
        

        if($branch_id == 'hyderabad')
        {
            
            $orderIds = $doctor_query->get(['id','doctor_id'])->unique('doctor_id');
            $orderUniqueIds = [];
            foreach ($orderIds as $key => $value) {
                array_push($orderUniqueIds,$value->id);
            }
            $response = $doctor_query->whereIn('id',$orderUniqueIds)->paginate(10);
            return response($response);

        }
        else
        {
            $doctor_query->where('branch_id', $branch_id) ;
        }
    //    $doctor_query->where('branch_id',1) ;

    // $doctor_query->join('doctors', 'doctor_orders.doctor_id', '=', 'doctors.id')->distinct('doctor_orders.doctor_id');

        $request->paginate == true ? $response  = $doctor_query->paginate(10) : $response = $doctor_query->get();

        return response($response, 200);

    }

    function getCoeSpeciality(Request $request)
    {
        try {
            $id = $request->id;
            $type = $request->type;
            $content = null;
            if ($type == 'coe') {
                $content = CentreOfExcellence::where('status', 'active')->where('id', $id)->first();

            }
            if ($type == 'speciality') {
                $content = Speciality::where('status', 'active')->where('id', $id)->first();

            }

            return response($content, 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response($th->getMessage(), 500);
        }

    }

    function getBranchCoeSpecialityById(Request $request)
    {
        $coe_id = $request->coe_id;
        $branch_id = $request->branch_id;
        $type = $request->type;
        $response = [];
        if ($type == 'coe' && $coe_id != null) {
            $response = CentreOfExcellence::where('status', 'active')->where('id', $coe_id)->with([
                'branches' => function ($query) {
                    $query->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug')->take(2);
                },
                'specialities' => function ($query) {
                    $query->where('status', 'active')->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug')->orderByPivot('coe_speciality.order_number');
                },
            ])->first('id');
        } elseif ($type == 'location' && $branch_id != null) {

            if($coe_id != null)
            {
                $response = Branch::where('status', 'active')->where('id', $branch_id)->with([
                    'coes' => function ($query) {
                        $query->where('status', 'active')->with(['specialities'=> function ($query) {
                            $query->orderByPivot('coe_speciality.order_number')->select('specialities.id', 'name', 'slug', 'icon_image','coe_speciality.order_number');
                        },])->orderBy('centre_of_excellences.order_number')->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                    },
                    'specialities' => function ($query) use ($coe_id) {
                        $query->where('status', 'active')->whereHas('coes',function($query) use ($coe_id){
                            $query->where('centre_of_excellences.id',$coe_id);             

                        })->orderByPivot('branch_speciality.order_number')->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug');
                    },
                ])->first('id');  
            }
            else
            {
                $response = Branch::where('status', 'active')->where('id', $branch_id)->with([
                    'coes' => function ($query) {
                        $query->where('status', 'active')->with(['specialities'=> function ($query) {
                            $query->where('status', 'active')->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug')->orderByPivot('coe_speciality.order_number');
                        },])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                    },
                    // 'specialities' => function ($query) {
                    //     $query->select('specialities.id', 'name', 'slug', 'icon_image');
                    // },
                ])->first('id');
            }
            


        } elseif ($type == 'coe' && $coe_id == null) {
            $response = CentreOfExcellence::where('status', 'active')->with([
                'branches' => function ($query) {
                    $query->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug')->take(2);
                }
            ])->first('id');
        } elseif ($type == 'location' && $branch_id == null) {
            $response = Branch::where('status', 'active')->with([
                'coes' => function ($query) {
                    $query->where('status', 'active')->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                }
            ])->first('id');
        }

        return response($response, 200);
    }



    function getConditionsByCOESpeciality(Request $request)
    {
        $coe_id = $request->coe_id;
        $speciality_id = $request->speciality_id;
        $conditions_query = Condition::query();

        if ($coe_id != null) {
            $conditions_query->whereHas('coes', function ($query) use ($coe_id) {
                $query->where('centre_of_excellences.id', $coe_id);
            });
        }

        if ($speciality_id != null) {
            $conditions_query->whereHas('specialities', function ($query) use ($speciality_id) {
                $query->where('specialities.id', $speciality_id);
            });
        }

        $response = $conditions_query->whereNotNull('diagnosis_treatment_slug')->where('status', 'active')->orderBy('diagnosis_treatment')->paginate(8);

        return response($response, 200);

    }

    function getCOESpecilityBranchByCondition(Request $request)
    {
        $branch_id = $request->branch_id;
        $coe_id = $request->coe_id;
        $condition_id = $request->condition_id;
        $type = $request->type;
        $response = [];
        if ($type == 'coe' && $coe_id != null) {
            $response = CentreOfExcellence::whereHas('conditions',function($query) use ($condition_id){
                $query->where('conditions.id',$condition_id);
            })->where('status', 'active')->where('id', $coe_id)->with([
                'branches' => function ($query) {
                    $query->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug')->take(2);
                },
                'specialities' => function ($query) {
                    $query->where('status', 'active')->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug');
                },
            ])->first('id');
        } elseif ($type == 'location' && $branch_id != null) {

            if($coe_id != null)
            {
                $response = Branch::where('status', 'active')->where('id', $branch_id)->with([
                    'coes' => function ($query) use ($condition_id){
                        $query->whereHas('conditions',function($query) use ($condition_id){
                            $query->where('conditions.id',$condition_id);
                        })->where('status', 'active')->with(['specialities'=>function($query) use ($condition_id){
                            $query->whereHas('conditions',function($query) use ($condition_id){
                                $query->where('conditions.id',$condition_id);
                            })->where('status', 'active')->select('specialities.id','name','slug');
                        }])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                    },
                    'specialities' => function ($query) use ($coe_id) {
                        $query->where('status', 'active')->whereHas('coes',function($query) use ($coe_id){
                            $query->where('centre_of_excellences.id',$coe_id);             

                        })->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug');
                    },
                ])->first('id');  
            }
            else
            {
                $response = Branch::where('status', 'active')->where('id', $branch_id)->with([
                    'coes' => function ($query) use ($condition_id) {
                        $query->whereHas('conditions',function($query) use ($condition_id){
                            $query->where('conditions.id',$condition_id);
                        })->where('status', 'active')->with(['specialities'=>function($query) use ($condition_id){
                            $query->where('status', 'active')->whereHas('conditions',function($query) use ($condition_id){
                                $query->where('conditions.id',$condition_id);
                            })->where('status', 'active')->select('specialities.id','name','slug');
                        }])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                    },
                    // 'specialities' => function ($query) {
                    //     $query->select('specialities.id', 'name', 'slug', 'icon_image');
                    // },
                ])->first('id');
            }
            


        } elseif ($type == 'coe' && $coe_id == null) {
            $response = CentreOfExcellence::whereHas('conditions',function($query) use ($condition_id){
                $query->where('condition.id',$condition_id);
            })->where('status', 'active')->with([
                'branches' => function ($query) {
                    $query->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug')->take(2);
                }
            ])->first('id');
        } elseif ($type == 'location' && $branch_id == null) {
            $response = Branch::whereHas('conditions',function($query) use ($condition_id){
                $query->where('condition.id',$condition_id);
            })->where('status', 'active')->with([
                'coes' => function ($query) {
                    $query->where('status', 'active')->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                }
            ])->first('id');
        }

            return response($response,200);
    }

    function getCOESpecilityBranchBySpecialist(Request $request)
    {
        $branch_id = $request->branch_id;
        $coe_id = $request->coe_id;
        $type = $request->type;
        $response = [];
        if ($type == 'coe' && $coe_id != null) {
            $response = CentreOfExcellence::where('status', 'active')->where('id', $coe_id)->with([
                'branches' => function ($query) {
                    $query->whereHas('specialists')->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug')->take(2);
                },
                'specialities' => function ($query) {
                    $query->whereHas('specialists')->where('status', 'active')->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug');
                },
            ])->first('id');
        } elseif ($type == 'location' && $branch_id != null) {

            if($branch_id != 'hyderabad')
            {
                if($coe_id != null)
                {
                    $response = Branch::whereHas('specialists')->where('status', 'active')->where('id', $branch_id)->with([
                        'coes' => function ($query){
                            $query->where('status', 'active')->with(['specialities'=>function($query) {
                                $query->whereHas('specialists')->where('status','active')->select('specialities.id','name','slug');
                            }])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                        },
                        'specialities' => function ($query) use ($coe_id) {
                            $query->whereHas('specialists')->where('status', 'active')->whereHas('coes',function($query) use ($coe_id){
                                $query->where('centre_of_excellences.id',$coe_id);             
    
                            })->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug');
                        },
                    ])->first('id');  
                }
                else
                {
                    $response = Branch::whereHas('specialists')->where('status', 'active')->where('id', $branch_id)->with([
                        'coes' => function ($query) {
                            $query->where('status', 'active')->with(['specialities'=>function($query){
                                $query->where('status', 'active')->whereHas('specialists')->where('status', 'active')->select('specialities.id','name','slug');
                            }])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                        },
                        // 'specialities' => function ($query) {
                        //     $query->select('specialities.id', 'name', 'slug', 'icon_image');
                        // },
                    ])->first('id');
                }
            }
            else
            {
                if($coe_id != null)
            {
                $response = Branch::whereHas('specialists')->where('status', 'active')->where('id',1)->orWhere('id',2)->with([
                    'coes' => function ($query){
                        $query->where('status', 'active')->with(['specialities'=>function($query) {
                            $query->whereHas('specialists')->where('status','active')->select('specialities.id','name','slug');
                        }])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                    },
                    'specialities' => function ($query) use ($coe_id) {
                        $query->whereHas('specialists')->where('status', 'active')->whereHas('coes',function($query) use ($coe_id){
                            $query->where('centre_of_excellences.id',$coe_id);             

                        })->select('specialities.id', 'name', 'slug', 'icon_image','doctor_slug');
                    },
                ])->first('id');  
            }
            else
            {
                $response = Branch::whereHas('specialists')->where('status', 'active')->where('id', $branch_id)->with([
                    'coes' => function ($query) {
                        $query->where('status', 'active')->with(['specialities'=>function($query){
                            $query->where('status', 'active')->whereHas('specialists')->where('status', 'active')->select('specialities.id','name','slug');
                        }])->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
                    },
                    // 'specialities' => function ($query) {
                    //     $query->select('specialities.id', 'name', 'slug', 'icon_image');
                    // },
                ])->first('id');
            }
            }
            
            


        } 
        // elseif ($type == 'coe' && $coe_id == null) {
        //     $response = CentreOfExcellence::whereHas('conditions',function($query) use ($condition_id){
        //         $query->where('condition.id',$condition_id);
        //     })->where('status', 'active')->with([
        //         'branches' => function ($query) {
        //             $query->where('status', 'active')->orderBy('branches.order_number')->select('branches.id', 'name', 'slug')->take(2);
        //         }
        //     ])->first('id');
        // } elseif ($type == 'location' && $branch_id == null) {
        //     $response = Branch::whereHas('conditions',function($query) use ($condition_id){
        //         $query->where('condition.id',$condition_id);
        //     })->where('status', 'active')->with([
        //         'coes' => function ($query) {
        //             $query->where('status', 'active')->select('centre_of_excellences.id', 'name', 'slug', 'icon_image');
        //         }
        //     ])->first('id');
        // }

            return response($response,200);
    }

    function getSpecialistPage(Request $request){
        if($request->branch_id != 'hyderabad')
        {
            $response = Specialist::where('branch_id',$request->branch_id)->where('speciality_id',$request->speciality_id)->first();
            return response($response,200);

        }
        else
        {
        $response = Specialist::where('region_id',1)->where('speciality_id',$request->speciality_id)->first();
        return response($response,200);

        }
        // dd($response);
    }
}