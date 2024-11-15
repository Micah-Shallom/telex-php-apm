<?php

namespace TelexOrg\TelexAPM\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class MetricsService
{

    public function collectMetrics($request, $response, $duration)
    {
        $metrics = [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'status_code' => $response->getStatusCode(),
            'timestamp' => date('Y-m-d H:i:s'),
        ];

        // Send metrics to the configured webhook
        $webhookUrl = Config::get('myapm.webhook_url');
        if ($webhookUrl) {
            Http::post($webhookUrl, $metrics);
        }
    }
}
