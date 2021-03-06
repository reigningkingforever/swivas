<?php

namespace App\Http\Middleware;

use Closure;
use App\FailedAction;

class SuspicionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $failedattempt = FailedAction::where('username',$request->user()->email)->count();
        if($failedattempt > 3)
        return redirect()->route('securityForm');
        return $next($request);
    }
}
