<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Attachment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize('view',Auth::user());
        $users = User::query()->where('role','!=','super')->get();
      
    
        return view('page.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create',Auth::user());
        return view('page.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Auth::user());
        $request->validate([
            'name'=>['required','string'],
            'mobile'=>['required','numeric',Rule::unique('users')],
            'email'=>['required','email',Rule::unique('users')],
            'password'=>['required','string'],
            'role'=>['required','in:admin,hr'],
            'photo'=>['nullable','image','mimes:jpg,bmp,png']
        ]);

        $avatar_id = 1;

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Instructor::class);
            $avatar_id = $avatar->id;
            
        }

        $password = Hash::make($request->password);
        
        User::create(array_merge($request->only(['name','mobile','email','role']),compact('password','avatar_id')));

        return redirect()->route('user.index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('view',Auth::user());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update');
        return view('page.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update',Auth::user());
        $request->validate([
            'name'=>['required','string'],
            'mobile'=>['required','numeric',Rule::unique('users')->whereNot('id',$user->id)],
            'email'=>['required','email',Rule::unique('users')->whereNot('id',$user->id)],
            'password'=>['nullable','string'],
            'role'=>['required','in:admin,hr'],
            'photo'=>['nullable','image','mimes:jpg,bmp,png']
        ]);

        $avatar_id = $user->avatar_id;

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Instructor::class);
            $avatar_id = $avatar->id;
            Attachment::remove($user->avatar);
            
        }


        $data = array_merge($request->only(['name','mobile','email','role']),compact('avatar_id'));
        if($request->password){
            $password = Hash::make($request->password);
            $data['password'] = $password;
        }

        
        $user->update($data);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete',$user);
        $user->delete();
        return redirect()->route('user.index');
    }
}
