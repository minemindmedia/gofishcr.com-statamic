<?php

namespace App\Http\Middleware;

use Closure;

class RedirectAfterReservation
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Check if the session has the redirect key
        if (session()->has('redirectAfterReservation')) {
            $url = session()->get('redirectAfterReservation');
            session()->forget('redirectAfterReservation'); // Remove the key to avoid repeated redirects
            return redirect($url);
        }

        return $response;
    }
}
