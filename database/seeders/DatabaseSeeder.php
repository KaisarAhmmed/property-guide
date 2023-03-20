<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        $page = new Page();
        $page->name = 'Contact Us';
        $page->slug = 'contact-us';
        $page->content = 'Lorem';


        $user = new User();
        $user->name = 'Kaisar';
        $user->email = 'kaisar@gmail.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('kaisar@gmail.com');
        $user->remember_token = Str::random(10);
        $user->save();

        \App\Models\Location::factory(10)->create();
        \App\Models\Property::factory(50)->create();
        \App\Models\Media::factory(500)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
