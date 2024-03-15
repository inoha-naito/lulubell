<?php

namespace Tests\Feature;

use Tests\TestCase;

class PingTest extends TestCase
{
    public function test_ping(): void
    {
        $response = $this->get('/api/ping');

        $response
            ->assertStatus(200)
            ->assertSee('pong');
    }
}
