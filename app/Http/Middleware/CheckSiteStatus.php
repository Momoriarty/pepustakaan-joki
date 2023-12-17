<?php
// app/Http/Middleware/CheckSiteStatus.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class CheckSiteStatus
{
    public function handle($request, Closure $next)
    {
        $activationDate = strtotime('2023-12-17 9:00:00');
        $inactiveDays = 1;

        if (time() - $activationDate > $inactiveDays * 24 * 60 * 60) {
            // Return a custom view for inactive website
            return response('Website Suspension', 403);
        }

        return $next($request);
    }
}
