<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WuasPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'post_text' => $this->faker->text,
                'user_id' => '1',
                'post_file' => 'wuas-content/upload/images/user/2022/04/aneesa.jpg',
                'status' => 1,
                'shared_from' => 2
        ];
    }
}
