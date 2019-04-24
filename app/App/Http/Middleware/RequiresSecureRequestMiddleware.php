<?php

declare(strict_types=1);

namespace App\Http\Middleware;

class RequiresSecureRequestMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if (env('APP_ENV') == 'production' && ! $this->isSecure()) {
            throw new \RuntimeException(sprintf('Insecure requests are not allowed for %s!', $request->getRequestTarget()));
        }

        return $next($request, $response);
    }
}
