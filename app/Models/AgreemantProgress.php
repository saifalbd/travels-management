<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgreemantProgress extends Model
{
    use HasFactory;

    protected $fillable = ['agreemant_id','tag_id','note','checked'];


    public function attachments(){
        return $this->belongsToMany(Attachment::class,'progress-attach','progress_id','attach_id');
    }
}
