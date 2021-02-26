<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
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
        // User::truncate();

        //$faker = Factory::create('fa_IR');

        //$password = Hash::make('password');

        // Moving to Employee Seeder Class
        // for ($i = 0; $i < 50; $i++) {
        //     User::create([
        //         'user_name' => $faker->userName,
        //         'email' => $faker->email,
        //         'phone' => $faker->phoneNumber,
        //         'password' => $password,
        //         'user_type' => 'E'
        //     ]);
        // }

        // Moving to Employer Seeder Class
        // for ($i = 0; $i < 50; $i++) {
        //     User::create([
        //         'user_name' => $faker->userName,
        //         'email' => $faker->email,
        //         'phone' => $faker->phoneNumber,
        //         'password' => $password,
        //         'user_type' => 'R'
        //     ]);
        // }
    }
}
