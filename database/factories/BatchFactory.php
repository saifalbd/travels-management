<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batch>
 */
class BatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->unique()->jobTitle(),
            'active'=>Arr::random([false,true]),
            'saturday'=>'10:30-11:30',
            'sunday'=>'10:30-11:30',
            'monday'=>'10:30-11:30',
            'tuesday'=>'10:30-11:30',
            'wednesday'=>'10:30-11:30',
            'thursday'=>'10:30-11:30',
            'friday'=>'10:30-11:30'];
    }
}
