<?php

namespace App\Http\Controllers;

use App\Services\PingService;

class PingController extends Controller
{
    public function __construct(private readonly PingService $pingService)
    {
    }

    public function ping(): string
    {
        return $this->pingService->ping();
    }
}
