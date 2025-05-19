<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MinifyHtml
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Hanya jalankan kalau response-nya HTML
        if ($response instanceof \Illuminate\Http\Response && 
            str_contains($response->headers->get('Content-Type'), 'text/html')) {

            $output = $response->getContent();

            // Hapus spasi, tab, dan newline antar tag HTML
            $output = preg_replace('/>\s+</', '><', $output); // Hapus spasi antar tag
            $output = preg_replace('/\s+/', ' ', $output);    // Hapus whitespace berlebih
            $output = trim($output);                          // Hapus whitespace awal dan akhir

            $response->setContent($output);
        }

        return $response;
    }
}
