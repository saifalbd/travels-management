<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $packages = Package::query()->get();

        return view('page.package.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('page.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string']
        ]);

        $name = $request->name;
        Package::create(compact('name'));
        return redirect()->route('admin.package.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        
        return view('page.package.edit',compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name'=>['required','string',Rule::unique('packages')->whereNot('id',$package->id)]
        ]);

        $name = $request->name;
        $package->update(compact('name'));
        return redirect()->route('admin.package.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        
        $package->delete();
        return redirect()->route('admin.package.index');
    }
}
