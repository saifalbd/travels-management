<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{


    public function loginPage(){

        if(Auth::guard('web')->check()){
            return redirect()->route('admin.home');
        }
        // return Attachment::query()->first();
        return view('page.login');
    }

    public  function  logout(){
        auth()->logout();
        return redirect()->route('admin.login');
    }

    public  function  resetPassword(Request $request){
       return view('page.resetPassword');
    }

    public  function  resetPasswordStore(Request $request){
        $request->validate(['password'=>['required','string','confirmed']]);
        $password = Hash::make($request->password);

        $user = $request->user();
        $user->update(compact('password'));

        \auth()->logout();
        return redirect()->route('login');
    }
    public function login(Request $request){

    $request->validate([
        'email'=>['required','email'],
        'password'=>['required','string']
    ]);

    $email = $request->email;
    $password = $request->password;

    $has = User::query()->where('email',$email)->first();

    if($has && Hash::check($password,$has->password)){
        Auth::login($has,true);
        return redirect()->route('home');
    }else{
        throw ValidationException::withMessages([
            'email'=>__('auth.failed'),
            'password'=>__('auth.failed'),
        ]);
    }



    }
}
