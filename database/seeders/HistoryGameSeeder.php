<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class HistoryGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_game')->insert([
            [
                'topic_id' => 1,
                'user_id' => 2,
                'true_number' => 3,
                'wrong_number' => 7,
                'score' => 300,
                'created_at' => Carbon::create(2024, 6, 3, 10, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 3,
                'true_number' => 10,
                'wrong_number' => 0,
                'score' => 1000,
                'created_at' => Carbon::create(2024, 6, 17, 10, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 4,
                'true_number' => 5,
                'wrong_number' => 5,
                'score' => 500,
                'created_at' => Carbon::create(2024, 6, 22, 10, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 2,
                'true_number' => 9,
                'wrong_number' => 1,
                'score' => 900,
                'created_at' => Carbon::create(2024, 6, 4, 10, 30, 0)
            ],
            [
                'topic_id' => 2,
                'user_id' => 2,
                'true_number' => 7,
                'wrong_number' => 8,
                'score' => 3500,
                'created_at' => Carbon::create(2024, 6, 5, 10, 30, 0)
            ],
            [
                'topic_id' => 2,
                'user_id' => 5,
                'true_number' => 10,
                'wrong_number' => 5,
                'score' => 5000,
                'created_at' => Carbon::create(2024, 7, 3, 10, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 5,
                'true_number' => 8,
                'wrong_number' => 2,
                'score' => 800,
                'created_at' => Carbon::create(2024, 7, 4, 10, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 8,
                'true_number' => 2,
                'wrong_number' => 8,
                'score' => 200,
                'created_at' => Carbon::create(2024, 7, 14, 10, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 8,
                'true_number' => 4,
                'wrong_number' => 6,
                'score' => 400,
                'created_at' => Carbon::create(2024, 7, 14, 12, 30, 0)
            ],
            [
                'topic_id' => 2,
                'user_id' => 9,
                'true_number' => 13,
                'wrong_number' => 2,
                'score' => 6500,
                'created_at' => Carbon::create(2024, 7, 3, 12, 30, 0)
            ],
            [
                'topic_id' => 1,
                'user_id' => 3,
                'true_number' => 3,
                'wrong_number' => 7,
                'score' => 300,
                'created_at' => Carbon::create(2024, 6, 20, 10, 30, 0)
            ],
        ]);
    }
}
