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
        $datauser = User::all();
        $alluser = User::all();
        foreach ($datauser as $user) {
            if ($user->user_type != 99) {
                AsiProduct::factory()->create([
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
