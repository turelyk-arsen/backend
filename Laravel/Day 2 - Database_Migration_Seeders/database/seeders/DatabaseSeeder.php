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

        Listing::factory(6)->create();

        //Lets create a bunch of hard coded stuff
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript, GPT',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston',
        //     'email' => 'email1234@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem lorem lorem Lorem lorem lorem 
        //     Lorem lorem lorem Lorem lorem lorem Lorem lorem lorem
        //     Lorem lorem lorem Lorem lorem lorem'
        // ]);
        // Listing::create([
        //     'title' => 'Fullstack Engineer',
        //     'tags' => 'laravel, backend, ballerina',
        //     'company' => 'Stark Inustries',
        //     'location' => 'New York',
        //     'email' => 'email@stark.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'yes yes another Lorem Lorem lorem lorem Lorem lorem lorem 
        //     Lorem lorem lorem Lorem lorem lorem Lorem lorem lorem
        //     Lorem lorem lorem Lorem lorem lorem'
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
