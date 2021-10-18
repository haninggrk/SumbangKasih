<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Donation;
use App\Models\User;
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
        User::factory()->count(10)->create([
            'user_type' => 1,
        ]);

        Category::factory()->count(4)->create([
            'name' => 'Test',
            'description' => 'Test',
            'photo' => '',
            'show' => true,
        ]);

        $users = User::where('user_type', 1)->get();

        foreach ($users as $user) {
            Donation::create([
                'user_id' => rand(1, 10),
                'category_id' => rand(1, 4),
                'message' => "lapar belum makan",
                'amount' => rand(100000,1000000),
                'is_anonymous' => rand(1, 2) === 1,
            ]);
        }

    }
}
