<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\{Str,Arr};

class PostCategory extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id','title','slug'];

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
}

