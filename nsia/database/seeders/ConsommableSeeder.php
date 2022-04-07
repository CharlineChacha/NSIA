<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Consommable;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsommableSeeder extends Seeder
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
            Consommable::create([
              'nomConsommable'=>$faker->name,
              'nomCategorie'=>$faker->name,
              'nombreCritique'=>$faker->randomDigitNot(5),
              'nombreAlert'=>$faker->randomDigitNot(5),
            ]);
        }
    }
}
