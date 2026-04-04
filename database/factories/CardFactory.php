<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    protected $model = Card::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(5),
            'desk_list_id' => DeskList::factory(),
        ];
    }
}
