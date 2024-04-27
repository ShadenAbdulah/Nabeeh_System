<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserFlowTest extends TestCase
{
    use RefreshDatabase;

    public function testUserFlow()
    {
        $user = User::class->factory()->create();

        // Simulate a user accessing the welcome page
        $response = $this->get('/');
        $response->assertStatus(200);

        // Simulate the user clicking on the test button
        $response = $this->get('/');
        $response->assertSee(__('extra.entering_to_test'));
        $response->assertStatus(200);

//        $user = User::all()->last();
//        $userId = $user->id;

        $response = $this->get('/train/' . $user->id . '?test=1');
        $response->assertSee(__('extra.start_test'));
        $response->assertStatus(200);

        // Simulate the user accessing the result view by user ID
        $response = $this->get("/send/5");
        $response->assertStatus(200);
    }
}
