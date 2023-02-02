<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->count(10)->create();
        // Task::factory(10)->create();
    }
}
