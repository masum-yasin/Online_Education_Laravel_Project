<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('editors')->insert([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('password'),
            'status' => '1',
        
        ]);
    }
}
