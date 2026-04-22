<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('permissions')->delete();

         $permissions=[
             //*** Donation Modules ***//
            ['name' => 'donation-view', 'group_name' => 'Donation', 'title' => 'View'],
            ['name' => 'donation-create', 'group_name' => 'Donation', 'title' => 'Create'],
            ['name' => 'donation-edit', 'group_name' => 'Donation', 'title' => 'Edit'],
            ['name' => 'donation-delete', 'group_name' => 'Donation', 'title' => 'Delete'],
            ['name' => 'donation-print', 'group_name' => 'Donation', 'title' => 'Print Donation'],


            ['name' => 'role-view', 'group_name' => 'Role and Permissions', 'title' => 'View'],
            ['name' => 'role-create', 'group_name' => 'Role and Permissions', 'title' => 'Create'],
            ['name' => 'role-edit', 'group_name' => 'Role and Permissions', 'title' => 'Edit'],
            ['name' => 'role-delete', 'group_name' => 'Role and Permissions', 'title' => 'Delete'],

         ];

         DB::table('permissions')->insert($permissions);
    }
}
