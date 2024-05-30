<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'nombre' => 'Chouffe',
            'precio' => '3.50',
            'descripcion' => 'Cerveza Artesana',
            'cantidad' => '35',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Ambar',
            'precio' => '2.00',
            'descripcion' => 'Cerveza Aragonesa',
            'cantidad' => '100',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Estrella galicia',
            'precio' => '2.50',
            'descripcion' => 'Cerveza Gallega',
            'cantidad' => '86',
        ]);

        DB::table('products')->insert([
            'nombre' => 'San miguel',
            'precio' => '2.00',
            'descripcion' => 'Cerveza Burgalesa',
            'cantidad' => '150',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Mahou',
            'precio' => '2.25',
            'descripcion' => 'Cerveza Madrileña',
            'cantidad' => '15',
        ]);
        
        DB::table('products')->insert([
            'nombre' => 'Punk ipa',
            'precio' => '4.25',
            'descripcion' => 'Cerveza de importación',
            'cantidad' => '15',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Alambra',
            'precio' => '2.75',
            'descripcion' => 'Cerveza Granadina',
            'cantidad' => '15',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Coca Cola',
            'precio' => '2.25',
            'descripcion' => 'Refresco de cola',
            'cantidad' => '15',
        ]);

    }
}
