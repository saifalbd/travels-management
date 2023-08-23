<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankSheeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banks = [
            [
                'name'=>'Brac Bank',
                'branch'=>'MoulviBazar',
                'active'=>true,
                'number'=>rand(1000000000,9999999999)
            ],
            [
                'name'=>'Sunali Bank',
                'branch'=>'MoulviBazar',
                'active'=>true,
                'number'=>rand(1000000000,9999999999)
            ],
            [
                'name'=>'Rupali Bank',
                'branch'=>'MoulviBazar',
                'active'=>true,
                'number'=>rand(1000000000,9999999999)
            ],
            [
                'name'=>'Pubali Bank',
                'branch'=>'MoulviBazar',
                'active'=>true,
                'number'=>rand(1000000000,9999999999)
            ],
            [
                'name'=>'Amropali Bank',
                'branch'=>'MoulviBazar',
                'active'=>true,
                'number'=>rand(1000000000,9999999999)
            ],
            [
                'name'=>'Katimon Bank',
                'branch'=>'MoulviBazar',
                'active'=>true,
                'number'=>rand(1000000000,9999999999)
            ],
            ];


            foreach($banks as $bank){
                Bank::create($bank);
            }
    }
}
