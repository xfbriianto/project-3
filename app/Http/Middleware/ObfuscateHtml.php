<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ObfuscateHtml
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (
            $response instanceof \Illuminate\Http\Response &&
            str_contains($response->headers->get('Content-Type'), 'text/html')
        ) {
            $html = $response->getContent();

            $obfuscated = '';
            for ($i = 0; $i < strlen($html); $i++) {
                $obfuscated .= '&#' . ord($html[$i]) . ';';
            }

            $response->setContent($obfuscated);
        }

        return $response;
    }
}
