<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Truncate table
       DB::table('focuses')->truncate();
        // Enable foreign key checks back
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
