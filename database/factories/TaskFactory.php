<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;    

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(6),
            'card_id' => Card::factory(),
        ];
    }
}
