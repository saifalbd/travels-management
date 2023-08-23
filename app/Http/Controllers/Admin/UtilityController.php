<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Attachment;
use App\Models\CompanyInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class UtilityController extends Controller
{


    public function viewSetting(){
        $info = CompanyInfo::query()->first();
        if(!$info){
            $info = new \stdClass();
            $info->institute = '';
            $info->address = '';
            $info->mobile = '';
            $info->email = '';
            $info->tagline = '';

        }
        $s = $info;
        return view('page.site_information',compact('s'));
    }


    public function storeSetting(Request $request){

        $request->validate([
            'institute'=>['required','string'],
'tagline'=>['required','string'],
'address'=>['required','string'],
'mobile'=>['required','string'],
'email'=>['required','email'],
'logoSquare'=>['nullable','image','mimes:jpg,bmp,png'],
'logoRectangle'=>['nullable','image','mimes:jpg,bmp,png'],
        ]);


      
       

        $info = CompanyInfo::query()->first();
        if(!$info){
            $request->validate(['logoSquare'=>['required','image','mimes:jpg,bmp,png']]);
            $request->validate(['logoRectangle'=>['required','image','mimes:jpg,bmp,png']]);
        }else{
            $logo_s_id = $info->logo_s_id;
            $logo_r_id = $info->logo_r_id;
        }

        if($request->hasFile('logoSquare')){
           $avatar =  Attachment::add($request->file('logoSquare'),CompanyInfo::class);
           $logo_s_id = $avatar->id;
        }

        if($request->hasFile('logoRectangle')){
            $avatar =  Attachment::add($request->file('logoRectangle'),CompanyInfo::class);
            $logo_r_id = $avatar->id;
       
         }

        $data = $request->only(['institute',
            'tagline',
            'address',
            'mobile',
            'email']);

        $data = array_merge($data,compact('logo_s_id','logo_r_id'));

     


        if($info){
            $info->update($data);
        }else{
            CompanyInfo::create($data);
        }

        Cache::delete('comInfo');

        return redirect()->route('admin.viewSetting',['success'=>'Success Update Your Informations']);

    }

    public function  authInfo(Request $request){
        $user = $request->user();
        return view("page.authProfile",compact('user'));
    }

    public function  authUpdate(Request $request){
        $user = $request->user();

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
            $avatar = Attachment::add($request->file('photo'),User::class);
            $avatar_id = $avatar->id;
            $data['avatar_id'] = $avatar_id;
        }

        $user->update($data);
        return redirect()->back();





    }


    public function clearCaches()
    {
        /**
         * remove chche
         */
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');

        

        /*add Cache*/

        if(config('app.app_online')){
            Artisan::call('config:cache');
            Artisan::call('route:cache');
            Artisan::call('view:cache');
        }
       


        return redirect()->back();
    }
    public function addCaches()
    {
        /**
         * add cache
         */
        Artisan::call('config:cache');
        Artisan::call('route:cache');
        Artisan::call('view:cache');
        return response('succesfully add new cache from now');
    }
}


