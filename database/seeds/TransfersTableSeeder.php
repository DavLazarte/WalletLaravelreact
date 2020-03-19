<?php

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([[
            'description' => 'salary',
            'amount' => '4800',
            'wallet_id' => 1,
            'created_at' => date("Y-m-s H:i:s"),
            'updated_at' => date("Y-m-s H:i:s")
        ], [
            'description' => 'Rent',
            'amount' => '-1200',
            'wallet_id' => 1,
            'created_at' => date("Y-m-s H:i:s"),
            'updated_at' => date("Y-m-s H:i:s")
        ]]);
    }
}
