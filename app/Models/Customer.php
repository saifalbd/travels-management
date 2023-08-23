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

    public function payments(){
        return $this->hasMany(CustomerPayment::class,'customer_id');
    }

    public function getPaidAttribute()
    {
        return $this->payments()->approved()->sum('amount');
    }

    public function getProgressAttribute()
    {
        $progress = AgreemantProgress::query()->where('agreemant_id',$this->agreemant->id)->with('attachments')->get();
        $tags = $this->agreemant->package->type->tags->map(function($tag)use($progress){
            $has = $progress->where('tag_id',$tag->id)->first();
            $checked = false;
            $note = '';
            $attachments = [];
            if($has){
                $checked =(bool) $has->checked;
                $attachments = $has->attachments->toArray();
                $note = $has->note;
            }
            $tag->checked = $checked;
            $tag->note = $note;
            $tag->attachments = $attachments;

            return $tag;
        });

        return $tags;
    }

}
