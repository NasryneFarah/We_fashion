<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\Size;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      // Création de 240 relations dans lantable pivot 
      for ($i = 0; $i < 240; $i++) {
        // Génération de produits aléatoirement
        $product = Products::all()->random();
        // Génération de taille aléatoirement
        $size = Size::all()->random();

        // créer une relation entre le produit et la taille si il n'en existe pas déjà une .
        // Appeler la méthode syncWithoutDetaching() avec le tableau de valeurs supplémentaires représentant les champs created_at et updated_at
        $product->sizes()->syncWithoutDetaching([$size->id => ['created_at' => Carbon::now(),'updated_at' => Carbon::now()]]);

    }

    }
}
