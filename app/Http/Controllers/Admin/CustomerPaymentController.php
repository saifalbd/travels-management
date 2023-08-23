<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Bank;
use App\Models\Customer;
use App\Models\CustomerAgreemant;
use App\Models\CustomerPayment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = CustomerPayment::query()->with(['customer','agreemant','bank','attach'])->get();
        
        return view('page.payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $byCustomer_id = $request->get('customer_id',false);
       $customers = Customer::query()->get();
       $banks = Bank::query()->get();
        return view('page.payment.create',compact('customers','banks','byCustomer_id'));
    }


   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'payment_method'=>['required','in:cash,bank,check'],
            'customer_id'=>['required','numeric',Rule::exists('customers','id')],
            'bank_id'=>['nullable','numeric',Rule::exists('banks','id')],
            'date'=>['required','date'],
            'branch'=>['nullable','string'],
            'check_no'=>['nullable','numeric'],
            'remark'=>['nullable','string'],
            'image'=>['nullable','image'],
            'amount'=>['required','numeric']

        ]);
        $pay_method = $request->payment_method;

        $customer_id = $request->customer_id;
        $bank_id = $request->bank_id;
        $date = $request->date;
        $branch = $request->branch;
        $check_no = $request->check_no;
        $remark = $request->remark;
        $approved = true;
        $amount = $request->amount;
        $by_id = $request->user('web')->id;

        $attachment_id = null;
        if($request->hasFile('image')){
            $attach = Attachment::add($request->file('image'),CustomerPayment::class);
            $attachment_id = $attach->id;
        }

        $agreemant_id = CustomerAgreemant::query()->where('customer_id',$customer_id)->first()->id;

        CustomerPayment::create(compact('customer_id','by_id','pay_method','bank_id','amount','date','branch','check_no','remark','agreemant_id','attachment_id','approved'));

        return redirect()->route('admin.customer.payment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerPayment $payment)
    {
    
   
        $payment->load(['customer','agreemant.package','bank']);

      

        $agreemant_id = $payment->agreemant_id;

        $totalPayment = CustomerPayment::query()->where('customer_id',$payment->customer_id)
        ->where('agreemant_id',$agreemant_id)->where('approved',true)->sum('amount');

        // return $payment;
        return view('page.payment.show',compact('payment','totalPayment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerPayment $payment)
    {
        $payment->delete();

        return redirect()->route('admin.customer.payment.index');
    }
}
