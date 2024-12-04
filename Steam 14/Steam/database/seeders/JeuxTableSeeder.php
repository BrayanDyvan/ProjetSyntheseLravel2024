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
            'nom'=>'Half-Life',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000019240331/300/half_life.png',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Portal 2',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000020221203/300/portal_2.jpg',
            'nbVersion'=>1,
            'professeur_id'=>1,  
            'equipe_id'=>1
            ],
            [
            'nom'=>'The Elder Scrolls V:Skyrim',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000020965216/300/the_elder_scrolls_v_skyrim.png',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Age of Empire II',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000018618019/300/age_of_empires_ii_the_age_of_kings.png',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Micraft',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000020929392/300/minecraft.png',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Half-Life 2',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000019102812/300/half_life_2.jpg',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Diablo II',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000019626222/300/diablo_ii.png',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Fallout 2',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000000177888/300/fallout_2.jpg',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Baldur Gate II',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000007591682/300/baldur_s_gate_ii_shadows_of_amn.jpg',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
            [
            'nom'=>'Deux Ex',

            'nbTelechargement'=>0,
            'dateDepot'=>'2024-10-08',
            'Resumer'=>'R.A.S',
            'video'=>'',
            'image'=>'https://media.senscritique.com/media/000019291104/300/deus_ex.png',
            'nbVersion'=>1,
            'professeur_id'=>1,
            'equipe_id'=>1
            ],
        ]);
        
    }
}
