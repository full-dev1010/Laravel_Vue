<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_show_index_page()
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertViewIs('index');
    }
}
