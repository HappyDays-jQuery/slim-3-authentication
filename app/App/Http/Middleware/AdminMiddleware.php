<?php

declare(strict_types=1);

namespace App\Http\Middleware;

class AdminMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if ($this->auth()->check()) {
            if ($this->user()->isAdmin() || $this->user()->isSuperAdmin() || $this->user()->can('view admin pages')) {
                return $next($request, $response);
            }
        }

        return $this->notFound($request, $response);
    }
}
