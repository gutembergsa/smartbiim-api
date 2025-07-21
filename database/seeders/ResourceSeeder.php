<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResourceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('resources')->insert([
            'resource_name' => 'arquivo_1',
            'manufacturer' => 'fabricante_1',
            'model' => 'modelo_1',
            'serial_number' => 1,
            'acquisition_date'  => now(),
        ]);
    
        DB::table('resources')->insert([
            'resource_name' => 'arquivo_2',
            'manufacturer' => 'fabricante_2',
            'model' => 'modelo_2',
            'serial_number' => 2,
            'acquisition_date'  => now(),
        ]);
    }
}
