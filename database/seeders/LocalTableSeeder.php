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
            'ubicacion' => 'C/Sagitario 4 ',
            'telefono' => '627632863',
            'horario' => '21',
        ]);
    }
}
