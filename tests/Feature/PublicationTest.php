<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublicationTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_get_list_of_all_publications(): void
    {
        $response = $this->get('/publications');

        $response->assertStatus(200);
    }

    public function test_get_specific_publication(): void
    {
        $response = $this->get('/publications/1');

        $response->assertStatus(200);
    }
}
