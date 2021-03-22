<?php

namespace Tests\Feature\User\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use WithFaker;

    /**
     * A basic feature test user_can_login.
     *
     * @return void
     */
    public function test_user_can_login()
    {
        $user = User::create([
            'username' => $this->faker->userName,
            'email' => $this->faker->safeEmail,
            'password' => '1234'
        ]);

        $this->post(route('login'), [
            'auth' => $user->username,
            'password' => '1234'
        ]);

        $this->assertAuthenticated();
    }
}
