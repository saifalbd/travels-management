<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\AgreemantProgress;
use App\Models\Attachment;
use App\Models\Customer;
use App\Models\CustomerAgreemant;
use App\Models\Package;
use App\Models\TypeTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::query()->with(['avatar','agreemant.package','reference'])->get()->filter(function($customer){
            return $customer->agreemant;
        })->values();

      

      
        return view('page.customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $packages = Package::query()->get();
        return view('page.customer.create',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        
      
        $name = $request->name;
        $gender = $request->gender;
        $father_name = $request->father_name;
        $mother_name = $request->mother_name;
        $date_of_birth = $request->date_of_birth;
        $email = $request->email;
        $nid = $request->nid;
        $phone = $request->mobile;
        $package_id = $request->package_id;
        $date = now()->toDateString();
        $present_address = $request->present_address;
        $permanent_address = $request->permanent_address;
        $amount = $request->amount;
        $advance = $request->advance;
        $after_permit = $request->after_permit;
        $after_visa= $request->after_visa;
        $due = $request->due;
        $ref = $request->ref;
        $passport = $request->passport;

        $ref_address = $request->ref_address;
        $ref_mobile = $request->ref_mobile;

        $pass = rand(100000,999999);
        $password = Hash::make(12345);
        $avatar_id = 1;

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->file('photo'),Customer::class);
            $avatar_id = $avatar->id;
        }


    

      $customer =   Customer::create(compact('name','phone','password','avatar_id'));


      $agreemant = compact('name', 'father_name', 'mother_name', 'gender', 'date_of_birth', 'phone', 'email', 'nid',
      'passport', 'package_id', 'date', 'amount', 'advance', 'after_permit', 'after_visa', 'due','present_address','permanent_address');

      $customer->agreemant()->create($agreemant);
      $customer->reference()->create(['ref'=>$ref,'address'=>$ref_address,'mobile'=>$ref_mobile]);
        return redirect()->route('admin.customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer->load(['agreemant'=>fn($q)=>$q->with('package.type.tags')]);
       
        $agreemant_id =$customer->id;
      
        $tags = $customer->progress;

        
        
        return view('page.customer.show',compact('customer','tags'));
    }

    public function updateProgress(Request $request){
        $request->validate([
            'tagid'=>['required','numeric'],
            'customer_id'=>['required','numeric'],
            'agreemant_id'=>['required','numeric'],
            'note'=>['nullable','string'],
            'attach'=>['nullable','array'],
            'attach.*'=>['nullable','image']
        ]);

     
       
        $customer_id = $request->customer_id;
        $tag_id = $request->tagid;
        $agreemant_id = $request->agreemant_id;
        $note = $request->note;
        $attachs = $request->file('attach');
        $checked = true;
        $data = compact('tag_id','agreemant_id','note','checked');
       $prosses =  AgreemantProgress::create($data);

       foreach ($attachs as $attach) {
        $avatar = Attachment::add($attach,AgreemantProgress::class);
        $avatar_id = $avatar->id;
        $prosses->attachments()->attach($avatar_id);
       }

       return redirect()->route('admin.customer.show',['customer'=>$customer_id]);
       

    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $packages = Package::query()->get();
        $customer->load('agreemant');

      
        
        return view('page.customer.edit',compact('customer','packages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $name = $request->name;
        $gender = $request->gender;
        $father_name = $request->father_name;
        $mother_name = $request->mother_name;
        $date_of_birth = $request->date_of_birth;
        $email = $request->email;
        $nid = $request->nid;
        $phone = $request->mobile;
        $package_id = $request->package_id;
        $date = now()->toDateString();
        $present_address = $request->present_address;
        $permanent_address = $request->permanent_address;
        $amount = $request->amount;
        $advance = $request->advance;
        $after_permit = $request->after_permit;
        $after_visa= $request->after_visa;
        $due = $request->due;
        $ref = $request->ref;
        $passport = $request->passport;

        $ref_address = $request->ref_address;
        $ref_mobile = $request->ref_mobile;

       
     
        $avatar_id = $customer->avatar_id;

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->file('photo'),Customer::class);
            $avatar_id = $avatar->id;
        }


    

       $customer->update(compact('name','phone','avatar_id'));


      $agreemant = compact('name', 'father_name', 'mother_name', 'gender', 'date_of_birth', 'phone', 'email', 'nid',
      'passport', 'package_id', 'date', 'amount', 'advance', 'after_permit', 'after_visa', 'due');

      $customer->agreemant->update($agreemant);
      $customer->reference->update(['ref'=>$ref,'address'=>$ref_address,'mobile'=>$ref_mobile]);
        return redirect()->route('admin.customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $this->authorize('delete',$customer);
        $customer->agreemant()->delete();
      
        return redirect()->route('admin.customer.index');
    }
}
