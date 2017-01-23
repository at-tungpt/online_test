<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request Request
     * @param \Closure                 $next    Next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && (auth()->user()->status == config('define.ACTIVATE'))) {
            return $next($request);
            
        }
        Session::flash('msg', trans('label_trans.account_not_activate'));
        return redirect('/');
    }
}
