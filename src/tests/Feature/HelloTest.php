<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// use App\Models\User;

class HelloTest extends TestCase
{
    // use RefreshDatabase;

    public function testHello()
    {

        $this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);
    }
        // User::factory()->create([
        //     'name'=>'aaa',
        //     'email'=>'bbb@ccc.com',
        //     'password'=>'test12345'
        // ]);
        // $this->assertDatabaseHas('users',[
        //     'name'=>'aaa',
        //     'email'=>'bbb@ccc.com',
        //     'password'=>'test12345'
        // ]);
    // }
}
