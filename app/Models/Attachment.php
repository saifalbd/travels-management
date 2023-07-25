<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class Attachment extends Model
{
    protected $fillable = ['type','disk','path','model','is_default'];

    protected $appends = ['url'];

  

    public static function remove($avatar){
        if(!$avatar->is_default){
            $avatar->delete();
        }
    }



    public static function add(UploadedFile $file,string $model):Attachment{
        $model = Str::lower(class_basename($model));
       $type = $file->getClientMimeType();
       $ex = $file->getClientOriginalExtension();
       $disk = 'public';
       $slug = $model;
       $uid = now()->timestamp;
       $name = $uid.'.'.$ex;
       $path  ='img/'.$slug;
    $path = Storage::disk($disk)->putFileAs($path,$file,$name);

  







      return static::create(compact('disk','path','model'));

    }


    public function getUrlAttribute()
    {
        $disk = Storage::disk($this->disk);
        return $disk->url($this->path);
    }




    public function deleteWithAttach(){
        $disk = $this->disk;
        Storage::disk($disk)->delete($this->path);
        $this->delete();
    }
}
