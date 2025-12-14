<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testStudentFind(): void
    {
        $response = $this->get('/api/student/00100000001')->assertJson([])->assertStatus(200);
    }
}
