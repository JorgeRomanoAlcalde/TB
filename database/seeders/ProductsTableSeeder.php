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
            'warehouse' => '1A - Principal',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Ambar',
            'precio' => '2.00',
            'descripcion' => 'Cerveza Aragonesa',
            'cantidad' => '100',
            'warehouse' => '1A - Principal',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Estrella galicia',
            'precio' => '2.50',
            'descripcion' => 'Cerveza Gallega',
            'cantidad' => '86',
            'warehouse' => '1A - Principal',
        ]);

        DB::table('products')->insert([
            'nombre' => 'San miguel',
            'precio' => '2.00',
            'descripcion' => 'Cerveza Burgalesa',
            'cantidad' => '150',
            'warehouse' => '1A - Principal',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Mahou',
            'precio' => '2.25',
            'descripcion' => 'Cerveza Madrileña',
            'cantidad' => '15',
            'warehouse' => '1A - Principal',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Alambra',
            'precio' => '2.75',
            'descripcion' => 'Cerveza Granadina',
            'cantidad' => '15',
            'warehouse' => '1A - Principal',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Coca Cola',
            'precio' => '2.25',
            'descripcion' => 'Refresco de cola',
            'cantidad' => '15',
            'warehouse' => '2A - Auxiliar',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Pepsi',
            'precio' => '1.75',
            'descripcion' => 'Refresco de cola',
            'cantidad' => '12',
            'warehouse' => '2A - Auxiliar',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Fanta de Naranja',
            'precio' => '2.50',
            'descripcion' => 'Refresco de Naranja',
            'cantidad' => '34',
            'warehouse' => '2A - Auxiliar',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Fanta de Limón',
            'precio' => '2.70',
            'descripcion' => 'Refresco de limón',
            'cantidad' => '30',
            'warehouse' => '2A - Auxiliar',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Nestea',
            'precio' => '3',
            'descripcion' => 'Refresco de té',
            'cantidad' => '5',
            'warehouse' => '2A - Auxiliar',
        ]);

        DB::table('products')->insert([
            'nombre' => 'Sprite',
            'precio' => '2.75',
            'descripcion' => 'Refresco sabor lima-limón',
            'cantidad' => '22',
            'warehouse' => '2A - Auxiliar',
        ]);

    }
}
