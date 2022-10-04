<?php

namespace Database\Factories;

use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProfile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'name' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'phone' => $this->faker->phoneNumber,
                'income' => $this->faker->numberBetween($min = 3000, $max = 5000),
                'image_path' => $this->faker->image('storage'),
               // 'image_path' => $this->faker->imageUrl('http://lorempixel.com/200/400/animals/'),
                //'image_path' => $this->faker->image(storage_path((''),50, 50)),

            ];

    }
}
