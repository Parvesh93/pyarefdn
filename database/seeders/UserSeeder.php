<?php

namespace Database\Seeders;

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
        //

        DB::table('users')->insert(
            [

                [

                    'name' => 'Admin user',
                    'username' => 'adminuser',
                    'email' => 'admin@gmail.com',
                    'role' => 'admin',
                    'status' => 'active',
                    'password' => bcrypt('admin@123'),
                ],

                [
                    'name' => 'Donar user',
                    'username' => 'donaruser',
                    'email' => 'danar@gmail.com',
                    'role' => 'donar',
                    'status' => 'active',
                    'password' => bcrypt('donar@123'),
                ],
                [

                    'name' => 'user',
                    'username' => 'user',
                    'email' => 'user@gmail.com',
                    'role' => 'user',
                    'status' => 'active',
                    'password' => bcrypt('user@123'),
                ],
            ]
        );
    }
}
