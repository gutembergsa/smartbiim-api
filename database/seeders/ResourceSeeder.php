<?php

namespace Database\Seeders;


use App\Models\Resource;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
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
        
        // if (!Resource::where('email', 'jessica@smartbiim.com.br')->first()) {
        //     $teacher = Resource::create([
        //         'name' => 'Jessica',
        //         'email' => 'jessica@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
        
        // if (!Resource::where('email', 'gabrielly@smartbiim.com.br')->first()) {
        //     $tutor = Resource::create([
        //         'name' => 'Gabrielly',
        //         'email' => 'gabrielly@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
        
        // if (!Resource::where('email', 'marcos@smartbiim.com.br')->first()) {
        //     $student = Resource::create([
        //         'name' => 'Marcos',
        //         'email' => 'marcos@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
    }
}
