<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
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
        $rand = collect(Category::all()->pluck('id'))->random(1)[0];

        User::factory()->count(10)->create([
            'user_type' => 2,
            'category_id' => $rand
        ]);



    }
}
