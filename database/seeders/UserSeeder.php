<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed an admin and a user
        DB::table('users')->insert([
           [
               'name' => 'admin',
               'email' => 'admin@gmail.com',
               'password' => bcrypt('password'),
               'role_id' => Role::ADMIN
           ],
            [
                'name' => 'user',
                'email' => 'example@gmail.com',
                'password' => bcrypt('password'),
                'role_id' => Role::USER
            ]
        ]);
    }
}
