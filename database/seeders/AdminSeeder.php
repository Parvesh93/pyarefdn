<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
    {
        DB::table('users')->delete();

        $user = User::create([

        	
            'name'=>'Super Admin',
            'email'=>'admin@mail.com',
            'contact'=>'0123456789',
            'dob'=>'2000-01-01',
            'password'=> Hash::make('admin1234'), //admin1234
            'password_text'=> Crypt::encryptString('admin1234'),
            'remember_token'=>'NlPo4Mr4KXcEw2Ltc2ujMwNh15VO405hLCeplSO1kDh7Gzr8r1J7ZnS3jixL',
            'is_admin'=>'1',
            'gender'=>'0',
            'login'=>'1',

        ]);

        // Delete Old Roles
        // DB::table('roles')->delete();

        $role = Role::create(['name' => 'Super Admin', 'slug' => 'super-admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->roles([$role->id]);

        // Create Roles
        $data = [
            ['name' => 'Admin', 'slug' => 'admin'],
            ['donor' => 'Donor', 'slug' => 'donor'],
           
        ];

        $roles = Role::insert($data);
    }
}
