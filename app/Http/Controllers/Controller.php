<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insertAlert($attribute=''){
        return ['removed'=>__('message.inserted',compact('attribute'))];
    }

    public function removeAlert($attribute=''){
        return ['updated'=>__('message.removed',compact('attribute'))];
    }
    public function updateAlert($attribute=''){
        return ['updated'=>__('message.updated',compact('attribute'))];
    }


      /**
     * overWrite the Env File values.
     * @param  String type
     * @param  String value
     * @return \Illuminate\Http\Response
     */
    public function overWriteEnvFile($type, $val)
    {
      
            $path = base_path('.env');

       
            if (file_exists($path)) {
                $val = '"'.trim($val).'"';
                if(is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0){
              
                    $oldVal = env($type);
                    // dd(file_get_contents($path));
                    $old = $type.'="'.$oldVal.'"';
                    $n = $type.'='.$val;
                    $replace = str_replace(
                        $old , $n, file_get_contents($path)
                    );
                  
                    file_put_contents($path, $replace);
                }
                else{
                    file_put_contents($path, file_get_contents($path)."\r\n".$type.'='.$val);
                }
            }

            
        
    }


}
