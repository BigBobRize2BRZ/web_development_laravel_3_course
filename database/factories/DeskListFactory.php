<?php

namespace Database\Factories;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    protected $model = DeskList::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'desk_id' => Desk::factory(),
        ];
    }
}
