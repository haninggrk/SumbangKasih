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
            'tanggal_melahirkan' => $this->faker->date(),
            'quantity' => $this->faker->numberBetween(1, 10),
            'liter_per_pack' => $this->faker->numberBetween(10, 100),
            'description' => $this->faker->text(100),
            'courir_pemilik' => $this->faker->numberBetween(0, 1),
            'city' => $this->faker->city(),
            'detail_address' => $this->faker->address(),

            'bukti_foto_covid19' => 'https://via.placeholder.com/1200x800',
        ];
    }
}
