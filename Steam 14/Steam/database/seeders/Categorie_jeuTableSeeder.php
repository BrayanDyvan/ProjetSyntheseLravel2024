<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Categorie_jeuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorie_jeu')->insert([
            [
                'jeu_id'=>1,
                'categorie_id'=>1

            ],
            [
                'jeu_id'=>2,
                'categorie_id'=>2

            ],
            [
                'jeu_id'=>3,
                'categorie_id'=>1

            ],
            [
                'jeu_id'=>4,
                'categorie_id'=>1

            ],
            [
                'jeu_id'=>5,
                'categorie_id'=>2

            ],
            [
                'jeu_id'=>6,
                'categorie_id'=>1

            ],
            [
                'jeu_id'=>7,
                'categorie_id'=>3

            ],
            [
                'jeu_id'=>8,
                'categorie_id'=>1

            ],
            [
                'jeu_id'=>9,
                'categorie_id'=>4

            ],
            [
                'jeu_id'=>10,
                'categorie_id'=>1]

        ]);
    }
}
