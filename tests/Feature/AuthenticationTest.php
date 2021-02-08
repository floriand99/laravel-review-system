<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);
        $response->assertRedirect('/home');
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
        ]);
    }

    public function test_user_can_login(){
        $user = \App\Models\User::factory()->create([
            'password' => bcrypt('password')
        ]);
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);
        $this->assertAuthenticatedAs($user);
    }
}
