<?php

/* @var \Illuminate\Database\Eloquent\Factory $factory */

namespace Database\Factories;

use App\Models\User;
use App\Models\UserActivation;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserActivationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserActivation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => fn() => User::factory()->create()->id,
            'token' => $this->faker->uuid,
        ];
    }
}
