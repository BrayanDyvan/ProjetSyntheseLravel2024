<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JeuxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jeux')->insert([
            [
            'nom'=>'Bathman',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'nbVersion'=>1
            ],
        ]);
        
    }
}
