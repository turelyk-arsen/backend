<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        // lets create a bunch of hard coded stuff
        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript, GPT',
            'company' => 'Acme Corp',
            'location' => 'Boston',
            'email' => 'email1234@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem'
        ]);
        Listing::create([
            'title' => 'Fullstack engineer',
            'tags' => 'laravel, backend',
            'company' => 'Stark Industries',
            'location' => 'New York',
            'email' => 'ema@stark.com',
            'website' => 'https://www.stark.com',
            'description' => 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
