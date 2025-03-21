<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Order::truncate();
        Order::insert(
            [
                [
                    'user_id' => 2, 'offer_id' => 3, 'start_date' => '2024-05-25', 'end_date' => '2024-06-25', 'total_price' => 300, 'created_at' => '2024-05-25 12:59:10',
                    'updated_at' => '2024-05-25 19:29:51'
                ],
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    }
}
