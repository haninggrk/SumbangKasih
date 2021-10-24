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
        //seeder untuk yang sudah di request, untuk tampilan di history
        foreach ($datauser as $user) {
            if($user->user_type != 99){
            AsiProduct::factory()->create([
                'user_id' => $user->id,
                'receiver_id'=>rand(1, count($alluser))
            ]);
        }
        }
        //seeder yang belum di request untuk test form request dan tampilan di cari asi
        foreach ($datauser as $user) {
            if($user->user_type != 99){
                AsiProduct::factory()->create([
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
