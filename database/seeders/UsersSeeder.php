<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kurikulum',
            'nip' => '1101',
            'alamat' => 'Wisaga',
            'role' => 'kurikulum',
            'supervisor' => 1,
            'email' => 'kurikulum@wisaga.sch.id',
            'password' => Hash::make('1101'),
        ]);
        User::create([
            'name' => 'Kepsek',
            'nip' => '1102',
            'alamat' => 'Wisaga',
            'role' => 'kepsek',
            'supervisor' => 1,
            'email' => 'kepsek@wisaga.sch.id',
            'password' => Hash::make('1102'),
        ]);

    }
}
