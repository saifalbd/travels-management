<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CustomerSheeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $package = Package::create(['name'=>'Package A']);
    $customer = [
        "name" => "saidul company", 
        "phone" => "01312288426", 
        "avatar_id" => 1, 
        "password" =>Hash::make(12345)
    ];

    $customer =   Customer::create($customer);

    $agreemant = [
        "customer_id" => $customer->id, 
        "name" => "saidul company", 
        "father_name" => "afran ahmed", 
        "mother_name" => "rumona katun", 
        "gender" => "Male", 
        "date_of_birth" => "2023-07-18", 
        "phone" => "01312288426", 
        "email" => "bookmanbd@outlook.com", 
        "nid" => "2851235444", 
        "passport" => "EE0314244", 
        "package_id" => $package->id, 
        "date" => "2023-07-25", 
        "amount" => 10000, 
        "advance" => 10000, 
        "after_permit" => 10000, 
        "after_visa" => 10000, 
        "due" => 10000, 
    ];

    $customer->agreemant()->create($agreemant);
    $reference = [
        "customer_id" => $customer->id, 
        "ref" => "boshir ahmed", 
        "address" => "mohamadi hoising", 
        
    ];


    $customer->reference()->create($reference);


 
 
    }
}
