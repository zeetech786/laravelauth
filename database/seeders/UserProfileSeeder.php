<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $value) {
            DB::table('profile')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->e164PhoneNumber,
                'income' => $faker->numberBetween($min = 3000, $max = 5000),
            ]);
       }
//        foreach (range(1,10) as $value)
//        DB::table('profile')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'phone' => Str::random(10),
//            'income' => Str::random(10),
//        ]);

    }
}
