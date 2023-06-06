<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
  public function homeForm(Request $request)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
        'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
        'department' => 'required',
        'date' => 'required',
    ]);

    return redirect()->route('home')->with('success', 'Request submitted successfully!!');
  }

  public function talkToDoctor(Request $request)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
        'coe_id' => 'required',
        'message' => 'required',
    ]);

    return redirect()->route('coe')->with('success', 'Request submitted successfully!!');
  }

  public function contactForm(Request $request)
  {
    $request->validate([
        'name' => 'required|string|max:255',
        'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
        'coe_id' => 'required',
        'message' => 'required',
    ]);

    return redirect()->route('contact')->with('success', 'Request submitted successfully!!');
  }
}
