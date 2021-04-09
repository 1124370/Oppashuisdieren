<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName(),
            'description'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'type'=> $this->faker->randomElement(['Cat' ,'Dog']),
            'weight'=> $this->faker->numberBetween(1,50),
            'hourly_rate'=> $this->faker->randomFloat(2,1,10),
        ];
    }
}
