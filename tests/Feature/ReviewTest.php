<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Review;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_a_review()
    {
        $user = \App\Models\User::factory()->create();
        $data = [
            'title' => 'A wonderful restaurant!',
            'content' => 'lorem ipsum dolor sit amet.',
            'rating' => 10
        ];
        $response = $this->actingAs($user)
            ->post('/reviews', $data);
        $data = array_merge($data, ['user_id' => $user->id]);
        $this->assertDatabaseHas('reviews', $data);
    }

    public function test_user_can_delete_own_review(){
        $user = \App\Models\User::factory()->create();
        $review = Review::factory()->create([
            'user_id' => $user->id
        ]);
        $response = $this->actingAs($user)
            ->delete('/reviews/' . $review->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('reviews', [
            'id' => $review->id
        ]);
    }

    public function test_non_author_cannot_delete_review(){
        $author = \App\Models\User::factory()->create();
        $unauthorizedUser = \App\Models\User::factory()->create();
        $review = Review::factory()->create([
            'user_id' => $author->id
        ]);
        $response = $this->actingAs($unauthorizedUser)
            ->delete('/reviews/' . $review->id);
        $response->assertStatus(403);
        $this->assertDatabaseHas('reviews', [
            'id' => $review->id
        ]);
    }
}
