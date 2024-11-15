<?php

namespace TelexOrg\TelexAPM\Middleware;

use Closure;
use TelexOrg\TelexAPM\Services\MetricsService;

class TelexAPMMiddleware
{
    protected $metricsService;

    public function __construct(MetricsService $metricsService)
    {
        $this->metricsService = $metricsService;
    }

    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        $start = microtime(true);

        // Proceed with the request
        $response = $next($request);

        $duration = microtime(true) - $start;

        // Collect metrics
        $this->metricsService->collectMetrics($request, $response, $duration);

        return $response;
    }
}