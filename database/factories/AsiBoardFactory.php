<?php

namespace Database\Factories;

use App\Models\AsiBoard;
use App\Models\AsiProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsiBoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
   protected $model = AsiBoard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
      'progress'=>$this->faker->numberBetween(0, 3),
      'detail_address_resipien'=>$this->faker->text(100),
      'courir_request'=>$this->faker->numberBetween(0, 1),
      'quantity_request'=>$this->faker->numberBetween(1, 100),
        ];
      
    }
}
