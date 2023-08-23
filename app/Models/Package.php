<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;

class Package extends Model
{
    use HasRichText;

    protected $guarded = [];

    protected $richTextFields = [
        'body',
    ];

   // protected $fillable = ['name','type_id','note','due','amount','advance','after_permit','after_visa','due','avatar_id'];

    public function type(){
        return $this->belongsTo(PackageType::class,'type_id');
    }

    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }
}
