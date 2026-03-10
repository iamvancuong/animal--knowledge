<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\HistoryGame;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasterDataSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DataSeeder::class);
        $this->call(PostLikeCommentSeeder::class);
        $this->call(TopicQuestionAnswer::class);
        $this->call(HistoryGameSeeder::class);
        $this->call(Reward::class);

    }
}
