<?php

namespace Tests\Feature\Webmaster\Tag;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStoreTag()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
