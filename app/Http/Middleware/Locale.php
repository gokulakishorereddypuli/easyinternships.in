<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
use App\Models\User;
use App\Models\Language;
use View;
use Request;
use Auth;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {

        if(Auth::check())
        {
                if ( Auth::user()->user_type=='Candidate')
                {
                   return redirect('candidate-dashboard');
                }
                if(Auth::user()->user_type=='Employer')
                {
                    return redirect('employer-dashboard');
                }
        }


        return $next($request);
    }
}
