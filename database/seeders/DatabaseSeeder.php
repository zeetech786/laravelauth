<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call([
            UserProfile::factory(10)->create();
            //UserProfileSeeder::class,
            //User::factory(20)->create();
        //]);
    }
}
