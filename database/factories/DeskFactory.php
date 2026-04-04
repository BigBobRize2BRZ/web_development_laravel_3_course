<?php

namespace Database\Factories;

use App\Models\Desk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desk>
 */
class DeskFactory extends Factory
{
    protected $model = Desk::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word() . ' ' . $this->faker->randomNumber(2),
        ];
    }
}
