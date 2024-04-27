<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcomeRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    // Add more test methods for each route...
    public function testResultRoute()
    {
        $response = $this->get('/send/5');
        $response->assertStatus(200);
    }

    public function testLangRoute()
    {
        $response = $this->get('lang/en');

        // Assert that the response is a redirect
        $response->assertStatus(302);

        // Follow the redirection
        $response->assertRedirect();

        // Assert that the session contains the selected language
        $this->assertTrue(session()->has('applocale'));

        // Assert that the session contains the expected language
        $this->assertEquals('en', session()->get('applocale'));
    }
}
