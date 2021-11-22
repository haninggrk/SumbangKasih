<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class MoneySenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        User::factory()->count(10)->create([
            'user_type' => 1,
        ]);

        $users = User::where('user_type', 1)->get();

        for ($i = 0; $i < 10; $i++) {
            foreach ($users as $user) {
                Donation::create([
                    'user_id' => $user->id,
                    'category_id' => rand(1, 4),
                    'message' => $faker->text(20),
                    'amount' => rand(100000, 1000000),
                    'is_anonymous' => 1 === rand(1, 2),
                    'payment_status' => rand(1, 3),
                ]);
            }
        }
    }
}
