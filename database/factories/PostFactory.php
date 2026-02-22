<?php

namespace Database\Factories;

use App\Models\Post;
use Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class; //specify the model that this factory is for    

   
    public function definition(): array
    {
        return [
            'id'=> Str::uuid()->toString(), //generate a unique UUID for the id
            'title' => $this->faker->sentence(), //generate a random sentence for the title
            'body' => $this->faker->paragraph(), //generate a random paragraph for the body
            'published' => $this->faker->boolean(), //generate a random boolean for the published status
            'author' => $this->faker->name(), //generate a random
            //
        ];
    }
}
