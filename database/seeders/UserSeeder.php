<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Mita',
                'username' => 'adminmita',
                'role' => 'Admin',
                'password' => bcrypt('1'),
                'level' => 1
            ],
            [
                'name' => 'Hani',
                'username' => 'resepsionis_hani',
                'role' => 'Resepsionis',
                'password' => bcrypt('1'),
                'level' => 2
            ],
            [
                'name' => 'Jojo',
                'username' => 'jojo_tamu',
                'role' => 'Tamu',
                'password' => bcrypt('1'),
                'level' => 3
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
