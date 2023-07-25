<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{


    CONST NUMBER = [
        '01715074048',
        '01715074049',
        '01715074050',
        '01715074051',
        '01715074052',
        '01715074053',
        '01715074054',
        '01715074055',
        '01715074056',
        '01715074057',
        '01715074058',
        '01715074059',
        '01715074060',
        '01715074061',
        '01715074062',
        '01715074063',
        '01715074064',
        '01715074065',

    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name'=>fake()->name,
            'specialty'=>Arr::random(["Diploma In Graphic Design","Professional Web Design",
                "Office Application [Basic]","Computer Hardware",
                "Computer Hardware",
                "Digital Marketing",
                "Spoken English"]),
            'nid'=>rand(100000000,999999999),
            'designation'=>Arr::random([
                'Director',
                'Chairman',
                'Managing Director',
                'Chief Executive Officer (CEO)',
                'Chief Financial Officer (CFO)',
                'Secretary',
                'Chief Operating Officer (COO)',
                'Chief Technology Officer (CTO)',
                'Vice President',
                'Manager',
            ]),
            'father_name'=>fake()->name('male'),
            'mother_name'=>fake()->name('female'),
            'mobile'=>Arr::random(static::NUMBER),
            'email'=>fake()->safeEmail(),
            'address'=>fake()->address,
          'join_date'=>Collection::times(30)->map(fn($n)=>now()->startOfMonth()->addDays($n)->toDateString())->random(),
            'salary'=>rand(10000,50000),
            'password'=>Hash::make(12345),
            'avatar_id'=>1];
    }
}
