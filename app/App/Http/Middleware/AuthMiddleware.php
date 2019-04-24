<?php

declare(strict_types=1);

namespace App\Http\Middleware;

class AuthMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if (! $this->auth()->check()) {
            $this->flash('warning', $this->lang('alerts.requires_auth'));

            return $this->redirect($response, 'auth.login');
        }

        return $next($request, $response);
    }
}
