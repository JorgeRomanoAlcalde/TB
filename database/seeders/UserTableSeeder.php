<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'nickname' => 'root',
            'nombre' => 'root',
            'apellidos' => 'root',
            'email' => 'root@root.com',
            'telefono' => '123456789',
            'admin' => '1',
            'password' => 'root',
        ]);
    }
}
