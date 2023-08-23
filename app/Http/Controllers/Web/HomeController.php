<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    


    public function home(){

        $posts = Post::query()->get();
        $packages = Package::query()->with('avatar')->get();
     
        return view('web.home',compact('packages','posts'));
    }

    public function about(){
        $packages = Package::query()->with('avatar')->get();
        return view('web.about',compact('packages'));
    }

    public function contact(){
        $packages = Package::query()->with('avatar')->get();
        return view('web.contact',compact('packages'));
    }

    public function service(){
        $packages = Package::query()->with('avatar')->get();
        return view('web.service',compact('packages'));
    }

    public function packageShow(Package $package){
        $packages = Package::query()->with('avatar')->get();
        return view('web.packageShow',compact('package','packages'));
    }
}
