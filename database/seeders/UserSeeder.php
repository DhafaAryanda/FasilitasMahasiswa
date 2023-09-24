<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin Dhafa',
            'email' => 'dhafa@admin.com',
            'nim' => '2008107010032',
            'password' => Hash::make('12345'),
            'role' => 'admin',
            'jurusan' => null,
            'prodi' => null,
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
