<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Buyer;
use App\Models\Auction;
use App\Models\AuctionHistory;
use App\Models\Deposit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Buyer::factory(10)->create();
        Auction::factory(10)->create();
        AuctionHistory::factory(10)->create();
        Deposit::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     BuyerSeeder::class,
        //     AuctionSeeder::class,
        //     AuctionHistorySeeder::class,
        //     DepositSeeder::class,
        // ]);
    }
}
