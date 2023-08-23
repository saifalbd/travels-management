<?php

namespace App\Models;

use App\View\Components\Icon\fee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tonysm\RichTextLaravel\Models\Traits\HasRichText;
use Illuminate\Support\{Arr, Str};
use PhpParser\Node\Expr\FuncCall;

class Post extends Model
{
    use HasFactory,HasRichText;

    protected static function slugAdd($query)
    {
        if (!Arr::has($query->attributes, 'slug')) {
            $slug = Str::slug($query->title);
            $last = static::query()->select('id')->latest('id')->first();
            if ($last) {
                $slug = $last->id . '-' . $slug;
            }
            $query->slug = $slug;
        }
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($query) {
            static::slugAdd($query);
        });
        static::updating(function ($query) {
            static::slugAdd($query);
        });
    }


   // protected $fillable = ['title','sub_title','category_id','slug','by_id','avatar_id','active'];
   protected $guarded = [];
    protected $richTextFields = [
        'body',
    ];


    public function category(){
        return $this->belongsTo(PostCategory::class,'category_id');
    }

    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }
}
