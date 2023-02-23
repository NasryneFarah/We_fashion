<?php

namespace Database\Seeders;

use App\Models\Categories;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       // Création du'une boucle qui créera 80 produits
       for ($i = 0; $i < 80; $i++) {

        // Ce bout de code sert à une catégorie aléatoire
        $categorie = Categories::all()->random();

        DB::table('products')->insert([
            'name' => $faker->word(), //génération de mot
            'description' => $faker->text(), //génération un text 
            'price' => $faker->randomFloat(2), //génération d'un nombre décimal 
            'publish' => $faker->randomElement([true, false]), //Nous avons un booléen
            'product_status' => $faker->randomElement([true, false]), //Nous avons un booléen
            'product_reference' =>$faker->word(16), //génération d'une référence
            'categorie_id' => $categorie->id, //récupération de la categorie généré plus haut
            'image' => "image/" . $categorie->name . "-" . $faker->numberBetween(1, 10) . ".jpg", // génere un nom de fichier composé du nom de la categorie suivit d'un id
            // Insérer des timestamp à l'aide de la classe Carbon
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    } 

    }
}
