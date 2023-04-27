<?php

namespace App\Models;

class Greeting
{
    private $greetings = [
        'morning' => 'Good morning!',
        'afternoon' => 'Good afternoon!',
        'evening' => 'Good evening!',
    ];

    public function getGreeting($key)
    {
        return $this->greetings[$key] ?? 'Invalid greeting key.';
    }
}
