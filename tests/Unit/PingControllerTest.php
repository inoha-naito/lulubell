<?php

namespace Tests\Unit;

use App\Http\Controllers\PingController;
use App\Services\PingService;
use PHPUnit\Framework\TestCase;

class PingControllerTest extends TestCase
{
    private PingController $pingController;

    public function setUp(): void
    {
        parent::setUp();

        $pingService = new PingService();
        $this->pingController = new PingController($pingService);
    }

    public function test_ping(): void
    {
        $this->assertSame('pong', $this->pingController->ping());
    }
}
