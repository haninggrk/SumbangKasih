<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\AsiProduct;
use App\Models\AsiBoard;
use Database\Factories\AsiBoardFactory;
use Illuminate\Database\Seeder;

class AsiBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       foreach(User::where('user_type', '2')->get() as $user){
            AsiBoard::factory()->create([
              'receiver_id' => $user->id,
              'asi_product_id'=> rand(1,10)
            ]);
    }
}
}
