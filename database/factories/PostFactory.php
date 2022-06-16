<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Post::class;

    public function definition()
    {
        return [
            'key'=> random_int(1, 80),
            'title'=>$this->faker->name,
            'agent'=>$this->faker->name(),
            'sum'=>random_int(10, 100),
            'buy_rent'=>$this->faker->name,
            'country'=>$this->faker->country,
            'region'=>$this->faker->city,
            'type'=>$this->faker->name,
            'building_type'=>$this->faker->name,
            'floor'=>random_int(1, 80),
            'room'=>random_int(1, 8),
            'swimming'=>random_int(0, 1),
            'informations'=>$this->faker->text,
            'lat'=>random_int(10, 80),
            'long'=>random_int(10, 80),
        ];
    }
}
