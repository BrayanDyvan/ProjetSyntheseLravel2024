<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('images')->insert([
            [
                'nom'=>'Half-Life',
                'lien'=>'https://media.senscritique.com/media/000019240331/300/half_life.png',
                'jeu_id'=>1
            ],
            [
                'nom'=>'Portal 2',
                'lien'=>'https://media.senscritique.com/media/000020221203/300/portal_2.jpg',
                'jeu_id'=>2
            ],
            [
                'nom'=>'The Elder Scrolls V:Skyrim',
                'lien'=>'https://media.senscritique.com/media/000020965216/300/the_elder_scrolls_v_skyrim.png',
                'jeu_id'=>3
            ],
            [
                'nom'=>'Age of Empire II',
                'lien'=>'https://media.senscritique.com/media/000018618019/300/age_of_empires_ii_the_age_of_kings.png',
                'jeu_id'=>4
            ],
            [
                'nom'=>'Micraft',
                'lien'=>'https://media.senscritique.com/media/000020929392/300/minecraft.png',
                'jeu_id'=>5
            ],
            [
                'nom'=>'Half-Life 2',
                'lien'=>'https://media.senscritique.com/media/000019102812/300/half_life_2.jpg',
                'jeu_id'=>6
            ],
            [
                'nom'=>'Diablo II',
                'lien'=>'https://media.senscritique.com/media/000019626222/300/diablo_ii.png',
                'jeu_id'=>7
            ],
            [
                'nom'=>'Fallout 2',
                'lien'=>'https://media.senscritique.com/media/000000177888/300/fallout_2.jpg',
                'jeu_id'=>8
            ],
            [
                'nom'=>'Baldur Gate II',
                'lien'=>'https://media.senscritique.com/media/000007591682/300/baldur_s_gate_ii_shadows_of_amn.jpg',
                'jeu_id'=>9
            ],
            [
                'nom'=>'Deux Ex',
                'lien'=>'https://media.senscritique.com/media/000019291104/300/deus_ex.png',
                'jeu_id'=>10
            ],
           
        ]);
    }
}
