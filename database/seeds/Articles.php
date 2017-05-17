<?php

use Illuminate\Database\Seeder;

use App\Article as Article;

class Articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = factory(Article::class, 50)->create()->each(function($articles){
            $articles->save();
        });
    }
}
