<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création des catégories
        $categories = [
            [
                "name" => "homme",
            ],
            [
                "name" => "femme",
            ]
        ];
        // Ajout à la base de donnée
        foreach ($categories as $categorie) {
            Categories::create($categorie);
        }

    }
}
