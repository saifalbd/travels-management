<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasAgrementMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $customer =    $request->user('customer');
      
       $customer->load('agreemant');

       
       $arg = $customer->agreemant;
    
         if(!$arg){
         return redirect()->route('customer.agreemant');
         }else if(!$arg->package_id){
            return redirect()->route('customer.agreementPackage');
         }

        return $next($request);
    }
}
