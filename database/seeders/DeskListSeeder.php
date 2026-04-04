<?php

namespace Database\Seeders;

use App\Models\Desk;
use App\Models\DeskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskListSeeder extends Seeder
{
    public function run(): void
    {
        $desks = Desk::all();
        foreach ($desks as $desk) {
            DeskList::factory(3)->create(['desk_id' => $desk->id]);
        }
    }
}
