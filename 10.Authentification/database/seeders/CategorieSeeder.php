<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert([
            'name' => 'categorie 1 ',
        ]);
        DB::table('categories')->insert([
            'name' => 'categorie 2 ',
        ]);
        DB::table('categories')->insert([
            'name' => 'categorie 3 ',
        ]);


    }
}