<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class loginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_login(): void
    {
        $response = $this->get('/login', [
            'user' => '00000000000',
            'password' => 'passwordHashed',
            'password_confirmation' => 'passwordHashed',
        ])
            ->assertJson([])
            ->assertStatus(201);
    }
}
