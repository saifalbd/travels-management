<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->unique()->jobTitle,
            'duration'=>rand(2,6),
            'fee'=>rand(5000,30000),
            'avatar_id'=>1,
            'active'=>Arr::random([false,true]),
            'details'=>fake()->paragraph(2),
           
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Course $course) {
            $course->instructors()->sync([Instructor::query()->select('id')->get()->pluck('id')->random()]);
        });

    }
}
