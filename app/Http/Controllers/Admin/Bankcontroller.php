<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class Bankcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Bank::query()->get();

        return view('page.bank.index',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('page.bank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string'],
            'branch'=>['required','string'],
            'number'=>['required','numeric']
        ]);

        Bank::create($request->toArray());

        return redirect()->route('admin.bank.index');
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
    public function edit( Bank $bank)
    {
        return view('page.bank.edit',compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bank $bank)
    {
        $request->validate([
            'name'=>['required','string'],
            'branch'=>['required','string'],
            'number'=>['required','numeric']
        ]);

     $bank->update($request->toArray());
        return redirect()->route('admin.bank.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank)
    {
        $this->authorize('delete',$bank);
         $bank->delete();
         return redirect()->route('admin.bank.index');
    }
}
