<?php
namespace Base;
use Closure;
abstract class Middleware{
	public function handle($request, Closure $next)
    {
        return $next($request);
    }
}