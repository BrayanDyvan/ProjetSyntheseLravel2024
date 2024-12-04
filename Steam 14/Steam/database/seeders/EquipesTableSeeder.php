<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class EquipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipes')->insert([
            [
                'nom'=>'équipe 1'
            ],
            [
                'nom'=>'équipe 2'
            ],
        ]);
    }
}
