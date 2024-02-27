<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Error;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Crypt;
class verifyApiRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        
        
        try {
            //code...
            $decoded = Crypt::decryptString($token);
            $data = explode(',',$decoded);
            if(now()->diffInMinutes($data[1]) > 500)
            {
               throw new \Exception('Uanauthorized access');
            }
            $request->mobile = $data[0];            
           
        } catch (\Throwable $th) {
            //throw $th;
            return response([
                'status'=>false,
                'message'=>'Uanauthorized access'
            ],403);
        }
        
        return $next($request);
    }
}
