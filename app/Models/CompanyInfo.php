<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;

    protected  $fillable = ['institute',
'tagline',
'address',
'mobile',
'email',
'logo_s_id','logo_r_id'];


    public  function  sLogo(){
        return $this->belongsTo(Attachment::class,'logo_s_id');
    }
    public  function  rLogo(){
        return $this->belongsTo(Attachment::class,'logo_r_id');
    }


}
