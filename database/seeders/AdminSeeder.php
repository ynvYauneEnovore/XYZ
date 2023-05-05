<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory as Faker;


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
        $admin->password = Hash::make('321654987Eno@'); // cambia "contraseña" por la contraseña que desees
        $admin->role = 'Administrador';
        $admin->celular = '9173467157';
        $admin->fecha_nacimiento = '1999-12-04';
        $admin->cedula = '65983214';
        $admin->codigo_ciudad = '56';
        $admin->save();

        // Crear 50 usuarios con rol "Usuarios"
        $faker = Faker::create();
        $password = '321654987Enovore@'; // la contraseña deseada
    for ($i = 0; $i < 50; $i++) {
        $user = new User();
        $user->name = ucfirst($faker->unique()->userName);
        $user->email = $faker->unique()->safeEmail;
        $user->password = Hash::make($password);
        $user->role = 'Usuarios';
        $user->celular = $faker->unique()->numerify('########');
        $user->fecha_nacimiento = $faker->date();
        $user->cedula = $faker->unique()->randomNumber(7);
        $user->codigo_ciudad = $faker->numberBetween(1, 1000);
        $user->save();
    }
    }
}
