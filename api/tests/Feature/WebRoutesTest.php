<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WebRoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
    public function accountDetails()
    {
        $response = $this->get('/account_details');

        $response->assertStatus(200);
    }
    public function testInput()
    {   
        $response = $this->json('POST','/accounts', ['name'=>'bads', 'balance'=>5000 ]);
        $response
         ->assertStatus(500);

        
    }
}
