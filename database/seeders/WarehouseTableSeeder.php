<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('warehouse')->insert([
            'seccion' => '1A',
        ]);

        DB::table('warehouse')->insert([
            'seccion' => '2A',
        ]);
    }
}
