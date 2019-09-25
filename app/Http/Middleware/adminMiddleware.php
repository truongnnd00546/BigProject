<?php
/**
 * Created by PhpStorm.
 * User: QUANG HAI
 * Date: 8/28/2018
 * Time: 3:40 PM
 */

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->adminLevel > 0){
                return redirect()->guest('/admin');
            }
        }
        return $next($request);
    }
}