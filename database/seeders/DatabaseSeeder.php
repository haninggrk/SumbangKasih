<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            AsiSenderSeeder::class,
            MoneySenderSeeder::class,
            ReceiverSeeder::class
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
