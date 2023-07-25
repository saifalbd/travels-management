<?php

namespace Database\Factories;

use App\Models\Batch;
use App\Models\Course;
use App\Models\FeeReceipt;
use App\Models\FeeReceiptVoucher;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\StudentReference;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeeReceiptVoucher>
 */
class FeeReceiptVoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'=>Student::query()->select('id')->get()->pluck('id')->random(),
            'amount'=>rand(5000,10000),
            'date'=>Collection::times(30)->map(fn($n)=>now()->startOfMonth()->addDays($n)->toDateString())->random(),
            'remark'=>fake()->paragraph(1)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (FeeReceiptVoucher $voucher) {

            $data = [


                'course_id'=>Course::query()->select('id')->get()->pluck('id')->random(),

                'amount'=>rand(5000,10000),
                'date'=>Collection::times(30)->map(fn($n)=>now()->startOfMonth()->addDays($n)->toDateString())->random(),
                'trx_mode'=>Arr::random([
                    'Cash','Bkash','Nagad','Roket','Bank'
                ]),
                'trx_no'=>fake()->numerify(),
                'remark'=>fake()->paragraph
            ];

           $fee =  $voucher->details()->create($data);

            $student = $voucher->student;
            $batches = $student->courses->pluck('batch_id')->toArray();

            $fee->batches()->sync($batches);





        });
    }
}
