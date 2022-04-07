<?php

namespace Database\Factories;

use Faker\Factory;
use App\Models\Consommable;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class ConsommableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consommable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
   public function definition()
    {
        return [
            'nomConsommable'=>$this->faker->firstname(10),
           // 'categorie_id'=>$this->faker->numberBetween(10,100),
            'nombreCritique'=>$this->faker->numberBetween(10,100),
            'nombreAlert'=>$this->faker->numberBetween(10,100),
        ];

    }

}
