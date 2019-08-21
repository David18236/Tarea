<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('marca_models')->insert([
            'nombre' => "Mazda"
        ]);
        DB::table('marca_models')->insert([
            'nombre' => "Toyota"
        ]);
        DB::table('marca_models')->insert([
            'nombre' => "Chevrolet"
        ]);
    }
}

