<?php

namespace Database\Factories;

use App\Models\Batch;
use App\Models\Course;

use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\StudentReference;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Ramsey\Collection\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

    CONST NUMBER = [
        '01717464617',
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
            'name'=>fake()->unique()->name,
            'father_name'=>fake()->unique()->name('male'),
            'mother_name'=>fake()->unique()->name('female'),
            'gender'=>Arr::random(['Male','Female']),
            'date_of_birth'=>fake()->date,
            'education'=>fake()->jobTitle,
            'occupation'=>Arr::random(['Student','Job','Bussiness']),
            'mobile'=>Arr::random(static::NUMBER),
            'guardian_mobile'=>Arr::random(static::NUMBER),
            'email'=>fake()->email,
            'avatar_id'=>1,
            'status'=>Arr::random([0,1,2]),
            'present_address'=>fake()->address,
            'permanent_address'=>fake()->address,
            'password'=>Hash::make(12345),
            'created_at'=> \Illuminate\Support\Collection::times(30)->map(fn($n)=>now()->startOfMonth()
                ->addDays($n)->toDateString())->random()
        ];
    }


    public function configure()
    {
        return $this->afterCreating(function (Student $student) {
            $fee = Arr::random([4000,7000,10000]);
            $data = [
                'student_id'=>$student->id,
                'type'=>Arr::random(['Certificate','Non-Certificate','Others']),
                'course_id'=>Course::query()->select('id')->get()->pluck('id')->random(),
                'batch_id'=>Batch::query()->select('id')->get()->pluck('id')->random(),
                'roll'=>\Illuminate\Support\Collection::times(300)->map(fn($n)=>$n+1)->random(),
                'registration_no'=>rand(10000,99999),
                'academic_year'=>Arr::random([2007,2008,2008,2009,2010,2011,2012,2017,2018]),
                'session'=>'Jan To March',
                'fee'=>$fee,
                'discount'=>1000,
                'first_ins'=>round($fee/3),
                'first_ins_date'=>fake()->date,
                'second_ins'=>round($fee/3),
                'second_ins_date'=>fake()->date,
                'third_ins'=>round($fee/3),
                'third_ins_date'=>fake()->date,
            ];
            StudentCourse::create($data);

            StudentReference::create([
                'student_id'=>$student->id,
                'ref'=>fake()->name,
                'ref_address'=>fake()->address,
                'ref_mobile'=>Arr::random(static::NUMBER),
            ]);
        });
    }
}
