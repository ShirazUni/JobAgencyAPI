<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('fa_IR');

        $password = Hash::make('password');

        for ($i = 0; $i < 100; $i++) {
            User::create([
                'user_name' => $faker->userName,
                'email'     => $faker->email,
                'phone'     => $faker->phoneNumber,
                'password'  => $password,
                'user_type' => 'E'
            ]);

            Employee::create([
                'user_id'         => $i + 1,
                'first_name'      => $faker->firstName,
                'last_name'       => $faker->lastName,
                'age'             => $faker->numberBetween(18, 45),
                'about'           => $faker->realText(200),
                'employee_status' => 'U'
            ]);
        }
    }
}
