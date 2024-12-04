<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('versions')->insert([
          "nom" => "VER 2017",
      "lien" => "https://video.fastly.steamstatic.com/store_trailers/256890051/movie480_vp9.webm?t=1720718157",
      "jeu_id" => "10",
      "qualiteVersion" => "HD",
        ]);
    }
}
