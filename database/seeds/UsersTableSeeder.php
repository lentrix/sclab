<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'username' => 'lentrix',
            'fullname' => 'Benjie B. Lenteria',
            'role' => 'admin',
            'password' => bcrypt('password123'),
        ]);
        App\User::create([
            'username' => 'recept',
            'fullname' => 'Sample Receptionist',
            'role' => 'receptionist',
            'password' => bcrypt('password123'),
        ]);
        App\User::create([
            'username' => 'medtech',
            'fullname' => 'Sample Medical Tech',
            'role' => 'medtech',
            'password' => bcrypt('password123'),
        ]);

    }
}
