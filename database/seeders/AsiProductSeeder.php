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
        $datauser=User::all();
        $alluser=User::all();
        foreach ($datauser as $user) {
            AsiProduct::factory()->create([
                'user_id' => $user->id,
                'receiver_id'=>rand(0, count($alluser))
            ]);
        }
    }
}
