<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('supplier')->insert([
            'nombreAgente' => 'Juan Jacobo',
            'nombreEmpresa' => 'JJ Company',
            'email' => 'JJ@gmail.com',
            'telefono' => '111222333',
        ]);

        DB::table('supplier')->insert([
            'nombreAgente' => 'Carlos Javier',
            'nombreEmpresa' => 'CJ Company',
            'email' => 'CJ@gmail.com',
            'telefono' => '444555666',
        ]);
    }
}
