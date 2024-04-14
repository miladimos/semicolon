<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function test_get_list_of_all_articles(): void
    {
        $response = $this->get('/articles');

        $response->assertStatus(200);
    }

    public function test_get_specific_article(): void
    {
        $response = $this->get('/articles/1');

        $response->assertStatus(200);
    }
}
