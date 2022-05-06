<?php

namespace Database\Factories;

use App\Models\Town;
use Illuminate\Database\Eloquent\Factories\Factory;

class TownFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Town::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'county_id' => $this->faker->word,
        'name' => $this->faker->word,
        'county_seat' => $this->faker->word,
        'county_level' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
