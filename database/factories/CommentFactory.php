<?php

namespace Database\Factories;
use App\Models\Comment; 

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class; //specify the model that this factory is for
    public function definition(): array
    {
        return [
            'post_id' => \App\Models\Post::factory(), //associate the comment with a post created by the PostFactory
            'author' => $this->faker->name(), //generate a random name for the author
            'content' => $this->faker->paragraph(), //generate a random paragraph for the content
        ];
    }
}
