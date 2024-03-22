<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    public function run(): void
    {
        Categorie::create([
            'name' => 'categorie 1'
        ]);

        Categorie::create([
            'name' => 'categorie 2'
        ]);

        Categorie::create([
            'name' => 'categorie 3'
        ]);
    }
}