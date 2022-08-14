<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2015/04/10/01/41/fox-715588_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2017/07/25/01/22/cat-2536662_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2016/11/12/11/51/animals-1818690_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2016/11/14/04/45/elephant-1822636_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2017/11/09/21/41/cat-2934720_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2019/10/30/16/19/fox-4589927_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2018/08/12/16/59/parrot-3601194_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2017/01/16/19/54/ireland-1985088_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2020/10/17/11/55/elephants-5661842_960_720.jpg'
        ])->create();

        Article::factory([
            'image' => 'https://cdn.pixabay.com/photo/2016/04/20/19/47/wolves-1341881_960_720.jpg'
        ])->create();
    }
}
