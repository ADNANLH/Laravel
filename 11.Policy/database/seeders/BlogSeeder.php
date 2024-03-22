<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'name' => 'Blog 1',
            'slug' => 'slug 1',
            'content' => 'content 1',
            'categorie_id' => 'categorie 1'
        ]);
        Blog::create([
            'name' => 'Blog 2',
            'slug' => 'slug 2',
            'content' => 'content 2',
            'categorie_id' => 'categorie 2'
        ]);
        Blog::create([
            'name' => 'Blog 3',
            'slug' => 'slug 3',
            'content' => 'content 3',
            'categorie_id' => 'categorie 3'
        ]);
    }
}