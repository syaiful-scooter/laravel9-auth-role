<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // input admin ke table user 
        // membuat user admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        // berikan role admin
        $admin->assignRole('admin');


        $penulis = User::create([
            'name' => 'penulis',
            'email' => 'penulis@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        $penulis->assignRole('penulis');
    }
}
