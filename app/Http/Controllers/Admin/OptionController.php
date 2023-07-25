<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Artisan;

class OptionController extends Controller
{
    
    public function index(){

     
        return view('page.option');
    }


    public function dateFormat(Request $request){
        $request->validate(['format'=>['required','string']]);
        $dateString = '2023-07-02';
        $format = $request->format;
$date = Carbon::parse($dateString)->format($format);
if(!$date){
    return redirect()->back()->withErrors(['format'=>'Date Format Not Are Valid']);
}

$this->overWriteEnvFile('DATE_FORMAT',$format);

Artisan::call('config:clear');

return redirect()->back();
    }


    public function smsConfig(Request $request){
        $request->validate([
            'token'=>['required','string'],
            'url'=>['required','url'],
            'info_url'=>['required','url'],
        ]);

        $token = $request->token;
        $url = $request->url;
        $info_url = $request->info_url;
      
        $this->overWriteEnvFile('SMS_API_TOKEN',$token);
        $this->overWriteEnvFile('SMS_URL',$url);
        $this->overWriteEnvFile('SMS_API_URL',$info_url);
        Artisan::call('config:clear');
        return redirect()->back();
    }



   

    
}
