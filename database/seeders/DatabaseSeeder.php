<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            TestTypeSeeder::class,
            TestSeeder::class,
            TextSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'ნუგო',
            'surname' => 'სხირელი',
            'email' => 'nskhiereli@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Aaaa1111'),
            'role_id' => 2,
            'image' => 'thumbnails/basic-profile.jpeg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
