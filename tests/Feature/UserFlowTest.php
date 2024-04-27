<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

//use Illuminate\Foundation\Testing\RefreshDatabase;

class UserFlowTest extends TestCase
{
//    use RefreshDatabase;

    public function testUserFlow()
    {
        $user = User::factory()->create();

        // Simulate a user accessing the welcome page
        $response = $this->get('/');
        $response->assertStatus(200);

        // Simulate the user clicking on the test button
        $response = $this->get('/');
        $response->assertSee(__('extra.entering_to_test'));
        $response->assertStatus(200);

        $response = $this->get('/train/' . $user->id . '?test=1');
        $response->assertSee(__('extra.start_test'));
        $response->assertStatus(200);

        $response = $this->get('/1/' . $user->id);
        $response->assertStatus(200);

        $response = $this->get('/12/' . $user->id);
        $response->assertStatus(200);

        // Simulate the user accessing the result view by user ID
        $response = $this->get("/send/" . $user->id);
        $response->assertStatus(200);
    }
}
