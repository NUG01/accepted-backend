<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('test_types')->insert([
            'name' => 'general',
            'year' => 2020,
            'version' => 1,
        ]);
        DB::table('test_types')->insert([
            'name' => 'general',
            'year' => 2021,
            'version' => 1,
        ]);
        DB::table('test_types')->insert([
            'name' => 'general',
            'year' => 2021,
            'version' => 4,
        ]);
    }
}
