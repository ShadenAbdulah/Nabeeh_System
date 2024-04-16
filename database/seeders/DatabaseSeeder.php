<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Test;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Test::create(['type' => 'Trace', 'title' => 'ZigZag', 'session_name' => 'ZL_trace', 'content' => 'ZL_1', 'dots' => 1]);
        Test::create(['type' => 'Predict', 'title' => 'ZigZag', 'session_name' => 'ZL_predict', 'content' => 'ZL_2', 'dots' => 2]);
        Test::create(['type' => 'Trace', 'title' => 'ZigZag', 'session_name' => 'ZL_trace', 'content' => 'ZL_3', 'dots' => 3]);
        Test::create(['type' => 'Predict', 'title' => 'ZigZag', 'session_name' => 'ZL_predict', 'content' => 'ZL_4', 'dots' => 4]);
        Test::create(['type' => 'Trace', 'title' => 'ZigZag', 'session_name' => 'ZL_trace', 'content' => 'ZL_5', 'dots' => 5]);
        Test::create(['type' => 'Predict', 'title' => 'ZigZag', 'session_name' => 'ZL_predict', 'content' => 'ZL_6', 'dots' => 6]);

        Test::create(['type' => 'Trace', 'title' => 'PL', 'session_name' => 'PL_trace', 'content' => 'PL_1', 'dots' => 1]);
        Test::create(['type' => 'Predict', 'title' => 'PL', 'session_name' => 'PL_predict', 'content' => 'PL_2', 'dots' => 2]);
        Test::create(['type' => 'Trace', 'title' => 'PL', 'session_name' => 'PL_trace', 'content' => 'PL_3', 'dots' => 3]);
        Test::create(['type' => 'Predict', 'title' => 'PL', 'session_name' => 'PL_predict', 'content' => 'PL_4', 'dots' => 4]);
        Test::create(['type' => 'Trace', 'title' => 'PL', 'session_name' => 'PL_trace', 'content' => 'PL_5', 'dots' => 5]);
        Test::create(['type' => 'Predict', 'title' => 'PL', 'session_name' => 'PL_predict', 'content' => 'PL_6', 'dots' => 6]);
    }
}
