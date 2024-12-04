<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'nom'=>'Les meilleurs jeux microsoft'
            ],
            [
                'nom'=>' les meilleurs jeux mac'
            ],
            [
                'nom'=>'les meilleurs jeux Blizzard'
            ], 
            [
                'nom'=>'les meilleurs jeux Fantaisie'
            ],
            [
                'nom'=>'les meilleurs jeux gratuit'
            ],
        ]);

    }
}
