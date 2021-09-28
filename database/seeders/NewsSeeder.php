<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;
use App\Models\News;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         DB::table('tbl_news')->truncate();
        DB::table('tbl_news')->truncate();
        News::factory()
        ->count(40)
        ->create();
    }
}
