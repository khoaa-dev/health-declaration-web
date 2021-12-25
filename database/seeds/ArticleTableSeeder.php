<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 1; $i <= 50; $i++) {
            $article = new Article;
            $article->title = 'Bai viet '.$i;
            $article->content = 'Noi dung '.$i;
            $article->save();
        }
    }
}
