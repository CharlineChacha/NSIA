<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Factory::create('fr_FR');
        for ($i=0; $i < 10; $i++) {
            Categorie::create([
              'nomCategorie'=>$faker->name,
            ]);
        }
    }
}
