<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    function getDoctorSuggetion(Request $request)
    {

        try {
            $name = $request->text;
            $user = User::where('status', 'active')->where('user_type', 'Doctor')->where(function ($query) use ($name) {
                $question = 'querty';
    
                if (!empty($name)) {
                    $question = $name;
                }
                ;
                $words = explode(' ', str_replace('.',' ',strtolower($question)));
                // dd($words);
                $query->where('name', "like", '%'. $name . "%");
                foreach ($words as $key => $word) {
                    
                    
                        $query->orWhere('name', "like",  $word . "%");
                    
    
                }
            })->select('id','name')->take(10)->get();
            return response($user,200);
        } catch (\Throwable $th) {
            return response($th->getMessage(),500);

        }
       
    }
}
