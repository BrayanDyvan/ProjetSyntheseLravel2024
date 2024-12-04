<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Jeu_usagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jeu_usager')->insert([
            [
                'usager_id'=>'1',
                'jeu_id'=>'1',
                'commentaire'=>'fantastique'
            ],
            [
                'usager_id'=>'1',
                'jeu_id'=>'2',
                'commentaire'=>'fantastique'
            ],
            [
                'usager_id'=>'2',
                'jeu_id'=>'1',
                'commentaire'=>'fantastique'
            ],
            [
                'usager_id'=>'3',
                'jeu_id'=>'2',
                'commentaire'=>'fantastique'
            ],
        ]);
    }
}
