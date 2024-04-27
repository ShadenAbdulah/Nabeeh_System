<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserFlowTest extends TestCase
{
    use RefreshDatabase;

    public function testUserFlow()
    {
        // Simulate a user accessing the welcome page
        $response = $this->get('/');
        $response->assertStatus(200);

        // Simulate the user clicking on the test button
        $response = $this->get('/');
        $response->assertSee('الدخول للاختبار');
        $response->assertStatus(200);

        $response = $this->get('/train/4');
        $response->assertSee(__('extra.start_test'));
        $response->assertStatus(200);

        // Simulate the user accessing the result view by user ID
        $response = $this->get("/send/5");
        $response->assertStatus(200);
    }
}
