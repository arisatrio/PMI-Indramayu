<?php

namespace Tests\Unit;

use Tests\TestCase; 

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_id_admin()
    {
        $this->assertDatabaseMissing('users', [
            'id' => 2,
        ]);
    }
}
