<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Account::truncate();
        Account::insert(
            [
                [
                    'name' => 'Kamil', 'last_name' => 'Mak', 'email' => 'kamilmak@gmail.com','password'=>'1235', 'password' => Hash::make('1235'), 'phone_number' => '123456789','address'=>'Janki 28b','admin'=>1,  'offers_id' => 0
                ],
                [
                    'name' => 'Jan', 'last_name' => 'Nowak', 'email' => 'jannowak@gmail.com','password'=>'1235', 'password' => Hash::make('1235'), 'phone_number' => '123456789','address'=>'Janki 28b','admin'=>0,  'offers_id' => 0
                ],
            ]
        );
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
