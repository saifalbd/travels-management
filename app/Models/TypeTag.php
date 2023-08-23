<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTag extends Model
{
    use HasFactory;

    protected $fillable = ['name','pack_type_id'];
}
