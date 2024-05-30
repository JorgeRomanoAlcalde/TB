<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('locals')->insert([
            'nombre' => 'La Taberna del Blues',
            'ubicacion' => 'C. de Juan José Lorente, 28, 50005 Zaragoza',
            'telefono' => '627632863',
            'horario' => '19:00 - 03:00',
        ]);
    }
}
