<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Felipe Catanhari'),
            'email' => Crypt::encryptString('Felipe@gmail.com'),
            'telefone' => Crypt::encryptString('(42)94862-8422'),
            'dt_nascimento' => '2004-09-21',
        ]);

        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Pedro Lucas'),
            'email' => Crypt::encryptString('Pedro@gmail.com'),
            'telefone' => Crypt::encryptString('(41)94085-9988'),
            'dt_nascimento' => '2000-01-01',
        ]);
    }
}
