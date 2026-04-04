<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = Card::all();
        foreach ($cards as $card) {
            Task::factory(5)->create(['card_id' => $card->id]);
        }
    }
}
