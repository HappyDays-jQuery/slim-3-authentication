<?php

declare(strict_types=1);

namespace App\Http\Middleware;

class GuestMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if ($this->auth()->check()) {
            return $this->redirect($response, 'home');
        }

        return $next($request, $response);
    }
}
