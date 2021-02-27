<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $password = Hash::make('password');

        for ($i = 0; $i < 50; $i++) {
            User::create([
                'user_name' => $faker->userName,
                'email'     => $faker->email,
                'phone'     => $faker->phoneNumber,
                'password'  => $password,
                'user_type' => 'E'
            ]);

            Employer::create([
                'user_id'      => $i    ,
                'first_name'   => $faker->firstName,
                'last_name'    => $faker->lastName,
                'company_name' => $faker->company,
                'about'        => $faker->realText(200)
            ]);
        }
    }
}
