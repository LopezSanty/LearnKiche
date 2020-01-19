<?php

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Santiago Lopez',
            'username' => 'Santy',
            'password' => Hash::make('admin123')
        ]);

        Role::create([
            'name' => 'Admin' ,
            'slug' => 'admin' ,
            'special' => 'all-access'
        ]);
    }
}
