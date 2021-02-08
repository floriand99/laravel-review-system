<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_category()
    {
        $data = [
            'name' => 'category name'
        ];
        $response = $this->post('/categories', $data);
        $this->assertDatabaseHas('categories', [
            'name' => $data['name']
        ]);
    }
}
