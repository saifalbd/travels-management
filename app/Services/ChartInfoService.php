<?php

namespace App\Services;

use App\Models\Course;
use Illuminate\Support\Facades\Http;

class ChartInfoService
{


    public function  courseWiseAdmission(){
        $courses = Course::query()->select(['id','name'])->withCount('inrolls')->get()
        ->filter(fn($item)=>$item->inrolls_count)->values()->take(10);

        $labels = $courses->pluck('name')->toArray();
        $items = $courses->pluck('inrolls_count')->toArray();
        return compact('labels','items');

    }

    
}