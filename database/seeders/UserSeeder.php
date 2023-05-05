<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(50)
            ->state(function (array $attributes) {
                return [
                    'name' => ucfirst($this->faker->unique()->userName),
                    'email' => $this->faker->unique()->safeEmail,
                    'password' => Hash::make('password'),
                    'cedula' => $this->faker->unique()->randomNumber(7),
                    'telefono' => $this->faker->unique()->phoneNumber,
                    'direccion' => $this->faker->address,
                    'fecha_nacimiento' => $this->faker->date(),
                    'email_verified_at' => now(),
                    'remember_token' => \Illuminate\Support\Str::random(10),
                ];
            })
            ->create();
    }
}
