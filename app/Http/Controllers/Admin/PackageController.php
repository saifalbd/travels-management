<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\Package;
use App\Models\PackageType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $packages = Package::query()->with('avatar')->get();

        return view('page.package.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = PackageType::query()->get();
      
        return view('page.package.create',compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string'],
            'type_id'=>['required','numeric'],
            'amount'=>['required','numeric'],
            'advance'=>['required','numeric'],
            'after_permit'=>['required','numeric'],
            'after_visa'=>['required','numeric'],
            'due'=>['required','numeric'],
            'photo'=>['required','image'],
            'note'=>['required','string']
        ]);

        $name = $request->name;
        $type_id = $request->type_id;
        $amount = $request->amount;
        $advance = $request->advance;
        $after_permit = $request->after_permit;
        $after_visa = $request->after_visa;
        $due = $request->due;
        $photo = $request->file('photo');
        $body = $request->note;

        $avatar = Attachment::add($photo,Package::class);
            $avatar_id = $avatar->id;

        Package::create(compact('name','type_id','amount','advance','after_permit','after_visa','due','avatar_id','body'));
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
        $types = PackageType::query()->get();
        return view('page.package.edit',compact('package','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name'=>['required','string'],
            'type_id'=>['required','numeric'],
            'amount'=>['required','numeric'],
            'advance'=>['required','numeric'],
            'after_permit'=>['required','numeric'],
            'after_visa'=>['required','numeric'],
            'due'=>['required','numeric'],
            'photo'=>['nullable','image'],
            'note'=>['required','string']
        ]);

        $name = $request->name;
        $type_id = $request->type_id;
        $amount = $request->amount;
        $advance = $request->advance;
        $after_permit = $request->after_permit;
        $after_visa = $request->after_visa;
        $due = $request->due;
        $photo = $request->file('photo');
        $body = $request->note;

        $avatar_id = $package->avatar_id;
        if($request->hasFile('photo')){
            $avatar = Attachment::add($photo,Package::class);
            $avatar_id = $avatar->id;
        }
      

        $package->update(compact('name','type_id','amount','advance','after_permit','after_visa','due','avatar_id','body'));
        return redirect()->route('admin.package.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $this->authorize('delete',$package);
        $package->delete();
        return redirect()->route('admin.package.index');
    }
}
