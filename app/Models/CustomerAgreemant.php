<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAgreemant extends Model
{
    use HasFactory;

    protected $fillable = [ 'customer_id','name', 'father_name', 'mother_name', 'gender', 'date_of_birth', 'phone', 'email', 'nid',
    'passport', 'package_id', 'date', 'amount', 'advance', 'after_permit', 'after_visa', 'due'];


    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }
}
