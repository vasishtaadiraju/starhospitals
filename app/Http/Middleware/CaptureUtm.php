<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CaptureUtm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->has('utm_source') && !empty($request->input('utm_source')))
        {
            session(['utm_source' => $request->input('utm_source')]);
        };
        if($request->has('utm_medium') && !empty($request->input('utm_medium')))
        {
            session(['utm_medium' => $request->input('utm_medium')]);
        };
        if($request->has('utm_campaign') && !empty($request->input('utm_campaign')))
        {
            session(['utm_campaign' => $request->input('utm_campaign')]);
        };
        if($request->has('utm_term') && !empty($request->input('utm_term')))
        {
            session(['utm_term' => $request->input('utm_term')]);
        };
        if($request->has('utm_content') && !empty($request->input('utm_content')))
        {
            session(['utm_content' => $request->input('utm_content')]);
        };
        if($request->has('utm_lms') && !empty($request->input('utm_lms')))
        {
            session(['utm_lms' => $request->input('utm_lms')]);
        };
        return $next($request);
    }
}
