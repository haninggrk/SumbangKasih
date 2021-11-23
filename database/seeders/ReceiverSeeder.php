<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ReceiverInfo;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ReceiverSeeder extends Seeder
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
            'user_type' => 2,
            'category_id' => $faker->numberBetween(1, 5)
        ]);

        foreach (Category::all() as $category) {
            $users = User::where('category_id', $category->id)->get();
            if($users->count() !== 0){
                $payable = floor($category->donator()->sum('amount') / $users->count());

                foreach ($users as $user) {
                    ReceiverInfo::create([
                        'user_id' => $user->id,
                        'nik' => $faker->nik(),
                        'wallet' => $payable
                    ]);
                }
            }
        }
    }
}
