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

        // Simulate the user clicking on the exam button
        $response = $this->get('/'); // Adjust the route to your exam page
        $response->assertSee('الدخول للاختبار');
        $response->assertStatus(200);

        // Simulate the user starting the exam
        $response = $this->post('/store/5', ['user' => 5]); // Adjust the route and data as per your application
        $response->assertStatus(200); // Assuming successful start of the exam

        // Simulate the user accessing the result view by exam ID
        $response = $this->get("/send/5"); // Adjust the route to your result view route
        $response->assertStatus(200);
    }
}
