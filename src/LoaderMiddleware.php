<?php

namespace Daresdev\LaravelLoader;

use Closure;

class LoaderMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof \Illuminate\Http\Response) {
            $content = $response->getContent();
            $loader = view('loader::loader')->render();
            $response->setContent($loader . $content);
        }

        return $response;
    }
}
