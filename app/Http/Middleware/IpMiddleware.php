<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;

class IpMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next,$ips)
    {
        $access = array_filter(array_map(function($v){
            return ( $star = strpos($v, "*") ) ? ( substr(getenv('REMOTE_ADDR'), 0, $star) == substr($v, 0, $star) )
                                               : ( getenv('REMOTE_ADDR') == $v );
        }, $ips));

        return $access ? $next($request) : App::abort(403);
    }
}
