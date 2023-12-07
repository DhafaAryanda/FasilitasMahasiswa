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
            [
            'name' => 'Admin Dhafa',
            'email' => 'dhafa@admin.com',
            'nim' => '2008107010032',
            'password' => Hash::make('12345'),
            'role' => 'admin',
            'jurusan' => null,
            'prodi' => null,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'name' => 'Operator Dhafa',
            'email' => 'dhafa@operator.com',
            'nim' => null,
            'password' => Hash::make('12345'),
            'role' => 'operator',
            'jurusan' => null,
            'prodi' => null,
            'created_at' => now(),
            'updated_at' => now()
            ],
            [
            'name' => 'Mahasiswa Dhafa',
            'email' => null,
            'nim' => '20081070100321',
            'password' => Hash::make('12345'),
            'role' => 'mahasiswa',
            'jurusan' => null,
            'prodi' => null,
            'created_at' => now(),
            'updated_at' => now()
            ],
            
        ]);
    }
}
