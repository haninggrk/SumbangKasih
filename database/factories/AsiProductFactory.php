<?php

namespace Database\Factories;

use App\Models\AsiProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsiProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AsiProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_picture' => 'https://via.placeholder.com/400x400',
            'days_after_birth' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 10),
            'litre_quantity' => $this->faker->numberBetween(10, 100),
            'description' => $this->faker->text(100),
            'vaccinated_proof' => 'https://via.placeholder.com/1200x800',
            'covid_free_proof' => 'https://via.placeholder.com/1200x800',
            'status' => $this->faker->numberBetween(0, 2)
        ];
    }
}
