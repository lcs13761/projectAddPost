<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use App\Notifications\RegisteredAuth;
use Illuminate\Support\Facades\Auth;

class RegisterAuthTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_and_sendEmail()
    {
        $user = User::create([
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'password' => Hash::make($this->faker->name()),
        ]);

        $this->assertTrue(  $user->notify(new RegisteredAuth($user)));
    }
}
