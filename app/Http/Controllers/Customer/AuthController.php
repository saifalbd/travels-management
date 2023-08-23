<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Models\Attachment;
use App\Models\Customer;

use App\Models\customerEducation;
use App\Models\customerSocial;
use App\Rules\BdPhone;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use stdClass;

class AuthController extends Controller
{
    
    public function loginPage(){

        if(Auth::guard('customer')->check()){
            return redirect()->route('customer.home');
        }
        return view('page.customerLogin');
    }

    public function registerPage(){
        return view('page.customerRegister');
    }
   

    public function register(Request $request){
        $request->validate([
            'name'=>['required','string','max:200'],
            'mobile'=>['required','numeric',Rule::unique('customers','phone')],
            'password'=>['required','min:6','confirmed']
        ]);
        $name = $request->name;
        $phone = $request->mobile;
        $password  = Hash::make($request->password);
        $avatar_id = 1;
        $customer = Customer::create(compact('name','phone','password','avatar_id'));

        Auth::guard('customer')->login($customer);
        return redirect()->route('customer.home');
    }

    public function login(Request $request){
    $request->validate([
        'mobile'=>['required','numeric'],
        'password'=>['required']
    ]);

    $customer  = Customer::query()->where('phone',$request->mobile)->first();
    $password = $request->password;


    if($customer  && Hash::check($password,$customer->password) ){
        Auth::guard('customer')->login($customer);
        return redirect()->route('customer.home');
    }else{
        throw ValidationException::withMessages([
            'mobile'=>__('auth.failed'),
            'password'=>__('auth.failed'),
        ]);
    }
    }


    public function  authInfo(Request $request){
        $isPassword = false;
        if($request->get('password',0)){
            $isPassword = true;
            return view("customer.authProfile",compact('isPassword'));
        }
        $customer = $request->user();

        $customer->load(['avatar','agreemant.package','reference','payments.attach']);
     
       

        return view("customer.authProfile",compact('customer','isPassword'));
      
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            'old_password'=>['required','string'],
            'password'=>['required','confirmed','min:6','max:20']
        ]);
        $customer = $request->user('customer');
        $password = $request->password;
        $oldPass = $request->old_password;

        if(!Hash::check($oldPass,$customer->password)){
            throw ValidationException::withMessages([
                'old_password'=>'Old Password Not Match Our Record'
            ]);
        }

        $customer->update(['passwword'=>Hash::make($password)]);


        return redirect()->route('customer.authInfo',['password'=>1]);

    }

    public function changeAvatar(Request $request){

        $request->validate([
            'image'=>['required','image']
        ]);

        $customer = $request->user('customer');

        Attachment::remove($customer->avatar);
        $file = $request->image;
       $avatar =  Attachment::add($file,customer::class);

        $avatar_id = $avatar->id;

        $customer->update(compact('avatar_id'));

       return response()->json($avatar);
       
    }

    public function  authUpdate(Request $request){
        $customer = Auth::guard('customer')->user();

        $request->validate([
            'fullName'=>['required','string'],
            'email'=>['required','email'],
            'mobile'=>['required','numeric'],
            'photo'=>['nullable','image','mimes:jpg,bmp,png','max:500'],
        ]);

        $name = $request->fullName;
        $email = $request->email;
        $mobile = $request->mobile;
        $photo = $request->file('photo');

        $data = compact('name','email','mobile','photo');

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->file('photo'),customer::class);
            $avatar_id = $avatar->id;
            $data['avatar_id'] = $avatar_id;
        }

        // $customer->update($data);
        return redirect()->back();
    }


    public function resetPassword(){
        return view('customer.resetPassword');
    }


    public function resetPasswordStore(Request $request){
        $request->validate(['password'=>['required','string','confirmed']]);
        $password = Hash::make($request->password);

        $user = $request->user();
        $user->update(compact('password'));

        Auth::guard('customer')->logout();
        return redirect()->route('customer.login.page');
    }




    public function logout(){

        Auth::guard('customer')->logout();
        return redirect()->route('customer.login');
    }


  

  

}
