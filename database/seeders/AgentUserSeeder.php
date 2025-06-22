<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AgentUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Support Agent',
            'email' => 'agent@example.com',
            'password' => Hash::make('12345678'),
            'role' => 'agent',
        ]);
    }
}