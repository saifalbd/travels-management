<?php

use Illuminate\Support\Carbon;

if (!function_exists('is_bd_phone')) {
    function is_bd_phone($num)
    {
        return preg_match('/(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$/', $num);
    }
}

if (!function_exists('format')) {
    function format($date)
    {
        return Carbon::parse($date)->format(config('app.dateFormat'));
    }
}



function comInfo($key){

    $model = \Illuminate\Support\Facades\Cache::remember('comInfo', 1000*60, function () {
        $model =  \App\Models\CompanyInfo::first();
        $model->load(['sLogo','rLogo']);
    return $model;
    });

    return $model->{$key};
    
    
}