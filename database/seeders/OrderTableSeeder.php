<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            'order_number'=>1,
            'status'=>1,
            'pay_status'=>1,
            'pay_type'=>1,
            'receive_type'=>1,
          ]);

    }
}
