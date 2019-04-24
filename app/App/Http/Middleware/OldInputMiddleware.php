<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Lib\Session;

class OldInputMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        Session::set('old', $request->getParams());
        $this->container->view->getEnvironment()->addGlobal('old', Session::get('old'));

        return $next($request, $response);
    }
}
