<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        $title = $this->faker->word();

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->sentence(20),
            'content' => $this->faker->text(),
            'url' => $this->faker->url(),
            'background' => $this->faker->hexColor(),
            'active' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
