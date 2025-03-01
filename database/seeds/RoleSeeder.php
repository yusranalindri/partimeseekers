<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'mitra',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'pelamar',
            'guard_name' => 'web'
        ]);


    }
}
