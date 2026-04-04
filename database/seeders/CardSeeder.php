<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\DeskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    public function run(): void
    {
        $deskLists = DeskList::all();
        foreach ($deskLists as $deskList) {
            Card::factory(4)->create(['desk_list_id' => $deskList->id]);
        }
    }
}
