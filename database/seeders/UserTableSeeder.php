<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_type' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('Admin123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_type' => 'agent',
                'name' => 'Agent',
                'email' => 'agent@email.com',
                'password' => Hash::make('Agent123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        User::insert($data);
    }
}
