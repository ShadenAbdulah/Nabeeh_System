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
        // Add more assertions as needed
    }

    public function testLangRoute()
    {
        $response = $this->get('lang/en');
        $response->assertStatus(200);
        // Add more assertions as needed
    }

    // Add test methods for other routes...

    /**
     * Test if all routes are defined.
     */
//    public function testRoutesAreDefined()
//    {
//        $routes = [
//            '/',
////            '/send/1',
////            '/fetch-results',
//            // Add more routes here
//        ];
//
//        foreach ($routes as $route) {
//            $this->assertTrue(Route::has($route), "Route $route is not defined.");
//        }
//    }
}
