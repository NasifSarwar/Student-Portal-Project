<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Illuminate\Http\Request;

class BayMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if ($this->auth->getUser()->type !== "bay") {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
