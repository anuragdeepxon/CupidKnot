<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $expected_occupation = json_encode($this->faker->randomElements(['private', 'government', 'business']));
        $expected_family_type = json_encode($this->faker->randomElements(['joint', 'nuclear']));

        return [
            'first_name' => $this->faker->firstName($gender),
            'last_name' => $this->faker->lastName($gender),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'dob' => $this->faker->date($format = 'Y-m-d', $max = '-20 years'),
            'gender' => $gender,
            'annual_income' => $this->faker->unique(true)->numberBetween(10000000, 50000000),
            'occupation' => $this->faker->randomElement(['private', 'government', 'business']),
            'family_type' => $this->faker->randomElement(['joint', 'nuclear']),
            'is_manglik' => $this->faker->randomElement(['yes', 'no']),
            'expected_income_low' => $this->faker->unique(true)->numberBetween(10000000, 20000000),
            'expected_income_high' => $this->faker->unique(true)->numberBetween(20000000, 50000000),
            'expected_occupation' => $expected_occupation,
            'expected_family_type' => $expected_family_type,
            'expected_is_manglik' => $this->faker->randomElement(['yes', 'no', 'both']),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
