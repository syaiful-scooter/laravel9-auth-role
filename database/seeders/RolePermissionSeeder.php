<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission as Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //
    // Permission : (akses : tambah-user, tambah-tulisan, edit-tulisan)
    // Role       : (peran user sebagai apa : admin, penulis   )

    // misal diberikan role akses
    // admin : (punya role : tambah-user)
    // penulis: tambah-tulisan, <edit-tulisan></edit-tulisan>

    // sehingga user yg di berikan role menjadi :
    // bambang => penulis ; (jadi: bambang bisa melakukan : tambah-tulisan dan edit-tulisan)

    // namun disini / menggungakan spatie ini bisa juga user/org diberikan Permission langsung
    // anton => tambah-user, edit-tulisan

    public function run()
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'lihat-user']);
        Permission::create(['name' => 'hapus-user']);

        Permission::create(['name' => 'tambah-tulisan']);
        Permission::create(['name' => 'edit-tulisan']);
        Permission::create(['name' => 'lihat-tulisan']);
        Permission::create(['name' => 'hapus-tulisan']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'penulis']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('lihat-user');
        $roleAdmin->givePermissionTo('hapus-user');

        $rolePenulis = Role::findByName('penulis');
        $rolePenulis->givePermissionTo('tambah-tulisan');
        $rolePenulis->givePermissionTo('edit-tulisan');
        $rolePenulis->givePermissionTo('lihat-tulisan');
        $rolePenulis->givePermissionTo('hapus-tulisan');
    }
}
