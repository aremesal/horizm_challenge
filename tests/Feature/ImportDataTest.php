<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ImportDataTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the API returns a list of users with posts.
     *
     * @return void
     */
    public function test_import_data()
    {
        Artisan::call('migrate');

        $response = $this->get('/api/v1/data/import-with-users');

        $response->assertStatus(200);

        $response->assertExactJson([
            'posts' => ['new' => 50, 'updated' => 0],
            'users' => ['new' => 5, 'exists' => 0]
        ]);
    }
}
