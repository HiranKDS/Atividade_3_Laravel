<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'Name' => 'Jhon',
            'DateOfBirth' => '2004-09-21',
            'Email' => 'JhonDoes@gmail.com',
            'RegistrationNumber' => '707070',
            'ClassCourse' => 'Software Engineer'
        ]);
    }
}
