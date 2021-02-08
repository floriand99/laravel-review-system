<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BusinessTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_business()
    {
        $user = \App\Models\User::factory()->create();
        $data = [
            'name' => 'Business name',
            'description' => 'Business description'
        ];
        $response = $this->post('/businesses', $data);
        $this->assertDatabaseHas('businesses', [
            'name' => $data['name'],
            'description' => $data['description'],
        ]);
    }

    public function test_user_can_delete_business(){
        $user = \App\Models\User::factory()->create();
        $business = new \App\Models\Business;
        $business->name = 'business name';
        $business->description = 'business description';
        $business->save();
        $response = $this->actingAs($user)->delete('/businesses/' . $business->id);
        $this->assertDatabaseMissing('businesses', [
            'id' => $business->id,
            'name' => $business->name,
        ]);
    }
}
