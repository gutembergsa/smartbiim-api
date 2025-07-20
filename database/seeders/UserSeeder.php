<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{    {
        // if (!User::where('email', 'cesar@smartbiim.com.br')->first()) {
        //     $superAdmin = User::create([
        //         'name' => 'Cesar',
        //         'email' => 'cesar@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
        
        // if (!User::where('email', 'kelly@smartbiim.com.br')->first()) {
        //     $admin = User::create([
        //         'name' => 'Kelly',
        //         'email' => 'kelly@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
        
        // if (!User::where('email', 'jessica@smartbiim.com.br')->first()) {
        //     $teacher = User::create([
        //         'name' => 'Jessica',
        //         'email' => 'jessica@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
        
        // if (!User::where('email', 'gabrielly@smartbiim.com.br')->first()) {
        //     $tutor = User::create([
        //         'name' => 'Gabrielly',
        //         'email' => 'gabrielly@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
        
        // if (!User::where('email', 'marcos@smartbiim.com.br')->first()) {
        //     $student = User::create([
        //         'name' => 'Marcos',
        //         'email' => 'marcos@smartbiim.com.br',
        //         'password' => Hash::make('123456a', ['rounds' => 12])
        //     ]);
        // }
    }}
}
