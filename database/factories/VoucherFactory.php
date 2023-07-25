<?php

namespace Database\Factories;

use App\Models\Voucher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voucher>
 */
class VoucherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'voucher_no'=>rand(1000,10000),
            'type'=>Arr::random(['payment','receipt']),
            'date'=>Collection::times(30)->map(fn($n)=>now()->startOfMonth()->addDays($n)->toDateString())->random(),
            'remark'=>fake()->paragraph,
            'amount'=>rand(1000,10000)

        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Voucher $voucher) {

           $amount = $voucher->amount;
           $type = $voucher->type;
           $date = $voucher->date;
           $ledger_id = DB::table('voucher_ledgers')->select(['id'])->get()->pluck('id')->random();
           $voucher->details()->create(compact('amount','type','ledger_id','date'));
        });
    }

}
