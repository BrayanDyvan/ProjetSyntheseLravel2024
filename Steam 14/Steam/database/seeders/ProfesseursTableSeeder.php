<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ProfesseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professeurs')->insert([
            ['nom'=>'chany',
            'prenom'=>'johnathan',
            'matricule'=>'2309444',
            'password'=>'2309444',
            'email'=>'lawidMocko@gmail.com',
            'avatar'=>'https://i.pinimg.com/originals/c5/28/57/c528577945f3ba054565b58ca94a4283.png',
            'role'=>'dépose,valide',
            'matiere'=>'Web 3'
        ],
           
        ]);
    }
}
