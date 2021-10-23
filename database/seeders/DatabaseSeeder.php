<?php

namespace Database\Seeders;

use App\Models\AsiBoard;
use Database\Factories\AsiBoardFactory;
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
            MoneySenderSeeder::class,
            ReceiverSeeder::class,
            WithdrawSeeder::class,
            AsiProductSeeder::class,
           // AsiBoardSeeder::class
        ]);
    }
}
