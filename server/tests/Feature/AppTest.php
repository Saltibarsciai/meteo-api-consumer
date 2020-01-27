<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AppTest extends TestCase
{
    /**
     * @return void
     */

    public function testIfEndointReturnsCity()
    {
        $input = 'kaunas';
        $response = $this->get( "/api/products/recommended/$input");
        $response->assertJson([
            'city' => $input
        ]);
    }
}
