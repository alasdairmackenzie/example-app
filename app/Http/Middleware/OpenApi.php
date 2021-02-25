<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpenApi
{
    /**
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Do someting mid request :)\\

        // Schema::create()->x('foo', 'bar');

        return $next($request);
    }
}
