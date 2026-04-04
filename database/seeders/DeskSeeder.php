<?php

namespace Database\Seeders;

use App\Models\Desk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskSeeder extends Seeder
{
    public function run(): void
    {
        Desk::factory(5)->create();
    }
}
