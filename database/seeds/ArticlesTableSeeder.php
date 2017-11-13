<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => str_random(10),
            'content' => str_random(50),
            'uid' => 1,
        ]);
//        DB::table('articles')->insert([
//            'title' => str_random(10),
//            'content' => str_random(50),
//            'uid' => 1,
//
//        ]);
    }
}
