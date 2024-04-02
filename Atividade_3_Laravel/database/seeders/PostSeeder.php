<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'PostTitle' => 'Introduction to Laravel',
            'Author' => 'John Doe',
            'PublicationDate' => '2020-03-08',
            'Content' => 'This post provides a basic overview of the Laravel framework...',
            'Tags' => 'laravel, framework, php',
        ]);
    }
}
