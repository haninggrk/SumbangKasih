<?php

namespace Database\Seeders;

use App\Models\AsiProduct;
use App\Models\User;
use Illuminate\Database\Seeder;

class AsiProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::where('user_type', 4)->get() as $asiSender) {
            AsiProduct::factory(1)->create([
                'user_id' => $asiSender->id
            ]);
        }
    }
}
