<?php

namespace Database\Factories;

use App\Models\Population;
use Illuminate\Database\Eloquent\Factories\Factory;

class PopulationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Population::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'town_id' => $this->faker->word,
        'year' => $this->faker->word,
        'women' => $this->faker->randomDigitNotNull,
        'total' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
