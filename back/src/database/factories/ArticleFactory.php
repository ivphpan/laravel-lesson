<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(4, true);
        $slug = Str::substr(Str::lower(preg_replace('/\s+/', '-', $title)), 0, -1);
        return [
            'title'=>$title,
            'slug'=>$slug,
            'body'=>$this->faker->paragraph(100, true),
            'img'=>'https://via.placeholder.com/600/5f1138/ffffff/?text=Laravel:8.*',
            'created_at'=>$this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
