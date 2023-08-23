<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;


  
    protected $fillable  = ['customer_id','pay_method','agreemant_id','date','bank_id','branch','check_no','amount','approved','attachment_id','remark','by_id'];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function agreemant(){
        return $this->belongsTo(CustomerAgreemant::class,'agreemant_id');
    }
    public function bank(){
        return $this->belongsTo(Bank::class,'bank_id');
    }

    public function attach(){
        return $this->belongsTo(Attachment::class,'attachment_id');
    }

    public function scopeApproved(Builder $builder,$bool=true){
        return $builder->where('approved',$bool);
    }

    public function billTo(){
        return $this->belongsTo(User::class,'by_id');
    }
}
