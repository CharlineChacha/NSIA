<?php

namespace Database\Factories;


use App\Models\Categorie;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categorie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
     public function definition()
     {
         return[
             'nomCategorie'=>$this->faker->name

         ];
     }
}
