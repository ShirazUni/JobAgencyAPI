<?php

namespace Database\Seeders;

use App\Models\Request;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('fa_IR');

        for ($i = 0; $i < 50; $i++) {
            Request::create([
                'employee_id'         => $faker->numberBetween(1, 50),
                'employer_id'         => $faker->numberBetween(51, 100),
                'request_description' => $faker->text,
                'is_accepted'         => $faker->boolean
            ]);
        }
    }
}
