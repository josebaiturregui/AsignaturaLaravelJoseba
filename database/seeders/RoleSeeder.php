<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role();
        $role->nombre='admin';
        $role->acronimo='admin';

        $role->save();

        $role = new Role();
        $role->nombre='user';
        $role->acronimo='user';
    
        $role->save();
    }
}
