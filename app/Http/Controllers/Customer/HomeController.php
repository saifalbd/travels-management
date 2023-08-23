<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Bank;
use App\Models\Customer;
use App\Models\CustomerAgreemant;
use App\Models\CustomerPayment;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{

    public function index(Request $request)
    {

        $customer = $request->user('customer');
        $customer->load(['avatar', 'agreemant.package', 'reference', 'payments.attach']);


        $tags = $customer->progress;
        //return $customer->payments;

        return view('customer.home', compact('customer','tags'));
    }


    public function payment(Request $request)
    {
        $banks = Bank::query()->get();
        $customer = $request->user('customer');

        return view('customer.payment', compact('banks', 'customer'));
    }

    public function paymentStore(Request $request)
    {


        $request->validate([

            'bank_id' => ['required', 'numeric', Rule::exists('banks', 'id')],
            'date' => ['required', 'date'],
            'branch' => ['nullable', 'string'],
            'check_no' => ['numeric', 'string'],
            'remark' => ['nullable', 'string'],
            'image' => ['nullable', 'image'],
            'amount' => ['required', 'numeric']

        ]);

        $customer_id = $request->user('customer')->id;

        $bank_id = $request->bank_id;
        $date = $request->date;
        $branch = $request->branch;
        $check_no = $request->check_no;
        $remark = $request->remark;
        $approved = false;
        $amount = $request->amount;

        $attachment_id = null;
        if ($request->hasFile('image')) {
            $attach = Attachment::add($request->file('image'), CustomerPayment::class);
            $attachment_id = $attach->id;
        }

        $agreemant_id = CustomerAgreemant::query()->where('customer_id', $customer_id)->first()->id;

        CustomerPayment::create(compact('customer_id', 'bank_id', 'amount', 'date', 'branch', 'check_no', 'remark', 'agreemant_id', 'attachment_id', 'approved'));

        return view('customer.home', compact('customer'));
    }



    public function agrement(
        Request $request
    ) {
        $customer = $request->user('customer');


        return view('customer.agreemant', compact('customer'));
    }

    public function agreementPackage(){
        $packages = Package::query()->get();
        return view('customer.agreementPackage',compact('packages'));
    }

    public function agreementPackageStore(Request $request){
       
        $request->validate([
            'package_id'=>['required','numeric'],
            'amount'=>['required','numeric'],
            'advance'=>['required','numeric'],
            'after_permit'=>['required','numeric'],
            'after_visa'=>['required','numeric'],
            'due'=>['required','numeric'],
        ]);

        $package_id =$request->package_id;
        $amount = $request->amount;
        $advance = $request->advance;
        $after_permit = $request->after_permit;
        $after_visa = $request->after_visa;
        $due  = $request->due;

      

        $data = compact('package_id','amount','advance','after_permit','after_visa','due');
        $customer = $request->user('customer');
        $customer->agreemant()->update($data);

        return redirect()->route('customer.home');


    }


    public function agrementStore(Request $request)
    {

        $customer = $request->user('customer');

        $request->validate([
            'name' => ['required', 'string'],
            'gender' => ['required', 'in:Male,Female'],
            'father_name' => ['required', 'string'],
            'mother_name' => ['required', 'string'],
            'nid' => ['required', 'string'],
            'passport' => ['required', 'string'],
            'mobile' => ['required', 'string'],
            'date_of_birth' => ['required', 'date'],
            'present_address' => ['required', 'string'],
            'permanent_address' => ['required', 'string'],
        ]);
        $name = $request->name;
        $gender = $request->gender;
        $father_name = $request->father_name;
        $mother_name = $request->mother_name;
        $nid = $request->nid;
        $passport = $request->passport;
        $phone = $request->mobile;
        $date_of_birth = $request->date_of_birth;
        $present_address = $request->present_address;
        $permanent_address = $request->permanent_address;
        $date = now()->toDateString();

        $data = compact('name', 'gender', 'father_name', 'mother_name', 'nid',
         'passport', 'phone', 'date_of_birth', 'present_address', 'permanent_address','date');
        $customer->agreemant()->create($data);
        return redirect()->route('customer.home');




      
    }

    public function review(Request $request){

        $student = $request->user('customer'); 
        $review = $student->review;
        $text = $review?$review->body:'';   
        return view('student.review.index',compact('text'));
    }

    public function reviewStore(Request $request){
        $student = $request->user('customer'); 
        $request->validate([
            'review'=>['required','string']
        ]);

        $student->review()->delete();

        $body = $request->review;
        $active = true;

        $student->review()->create(compact('body','active'));

        return redirect()->route('customer.review');

    }
}
