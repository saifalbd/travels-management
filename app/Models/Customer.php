<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name','phone',
        'password','avatar_id',
        'email_verified_at'
    ];

    public function agreemant(){

        return $this->hasOne(CustomerAgreemant::class,'customer_id');
    }


    public function reference(){
        return $this->hasOne(CustomerReference::class,'customer_id');
    }

    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }

}
