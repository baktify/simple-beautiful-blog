<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3,false),
            'full_text' => $this->faker->text(800),
            'image' => null,
            'category_id' => $this->faker->numberBetween(1,4),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function(Article $article){
            $article->tags()->syncWithoutDetaching([
                random_int(1,5),
                random_int(1,5),
                random_int(1,5),
                random_int(1,5)
            ]);
        });
    }
}
