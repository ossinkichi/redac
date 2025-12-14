<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_register(): void
    {
        $this->post('/register', [
            'user' => '00100000001',
            'password' => 'passwordHashed',
            'password_confirmation' => 'passwordHashed',
        ])
            ->assertJson([])
            ->assertStatus(201);
    }

    public function test_login(): void
    {
        $this->test_register();

        $this->post('/login', [
            'user' => '00100000001',
            'password' => 'passwordHashed',
            'password_confirmation' => 'passwordHashed',
        ])
            ->assertJson([])
            ->assertStatus(201);
    }
}
