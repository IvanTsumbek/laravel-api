<?php

namespace Database\Seeders;

use App\Models\Card;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Desk;
use App\Models\Task;
use App\Models\User;
use App\Models\DeskList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Task::factory()->count(800)->create();
    }
}
