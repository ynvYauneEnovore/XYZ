<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Yovan Ramon Yaune Enovore';
        $admin->email = 'admin@xyz.bo';
        $admin->password = Hash::make('12527614'); // cambia "contraseña" por la contraseña que desees
        $admin->role = 'admin';
        $admin->save();
    }
}
