<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class EtudiantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('etudiants')->insert([
            [
                'session'=>'2024',
                'usager_id'=>1
            ],
            [
                'session'=>'2024',
                'usager_id'=>2
            ],
            [
                'session'=>'2024',
                'usager_id'=>3
            ],
            [
                'session'=>'2024',
                'usager_id'=>4
            ],
            [
                'session'=>'2024',
                'usager_id'=>5
            ],
            [
                'session'=>'2024',
                'usager_id'=>6
            ],
            [
                'session'=>'2024',
                'usager_id'=>7
            ],
            [
                'session'=>'2024',
                'usager_id'=>8
            ],
            [
                'session'=>'2024',
                'usager_id'=>9
            ],
            [
                'session'=>'2024',
                'usager_id'=>10
            ],
           
        ]);
    }
}
