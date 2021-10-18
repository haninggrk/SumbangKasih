<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Withdraw;
use Illuminate\Database\Eloquent\Factories\Factory;

class WithdrawFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Withdraw::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $withdrawers = User::where('user_type', 2)->get()->random();
        return [
            'user_id' => $withdrawers->id,
            'message' => $this->faker->text(10),
            'amount' => 100000,
            'status' => rand(1,3),
            'rejection_message' => $this->faker->text(10),
        ];
    }
}
