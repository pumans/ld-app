<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_user_id' => 1,
            'category_id' => 1,
            'title' => $this->faker->text(50),
            'preview'=> $this->faker->text(100),
            'body'=> $this->faker->text(300),
            'image' => $this->faker->image("public/storage/posts", 640, 520, null,false),
            'meta_description'=> $this->faker->text(50),
            'meta_keywords'=> $this->faker->text(50),
        ];
    }
}
