<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Uuid;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_can_insert_data_to_database()
    {
        $data = User::factory()->make()->toArray();

        User::create(array_merge($data, ['uuid' => (string) Uuid::generate(4)]));

        $this->assertDatabaseHas('users', $data);
    }
}
