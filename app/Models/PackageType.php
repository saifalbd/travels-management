<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function tags(){
        return $this->hasMany(TypeTag::class,'pack_type_id');
    }
}
