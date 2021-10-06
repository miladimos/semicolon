<?php

namespace Tests\Feature\User\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use WithFaker,
        RefreshDatabase;

    public function test_user_can_see_login_form()
    {
        $response = $this->get(route('auth.login.form'));
        $response->assertSeeText("Login");
    }

    /**
     * Test User Login with Username
     * @depends test_user_can_see_login_form
     */
    public function test_user_can_login_by_username()
    {
        $data = User::factory()->make()->toArray();
        $user = User::create($data);

        $this->post(route('auth.login'), [
            'auth' => $user->username,
            'password' => '12344321'
        ]);

        $this->assertAuthenticated();
    }

    public function test_user_can_login_by_email()
    {
        $user = User::factory()->create();

        $this->post(route('auth.login'), [
            'auth' => $user->email,
            'password' => '12344321',
        ]);

        $this->assertAuthenticated();
    }
}
