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
        foreach(User::where('user_type', '1')->get() as $user){
            AsiProduct::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
