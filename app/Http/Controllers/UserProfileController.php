<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserProfile::paginate(5);
        //dd((int)$users);
        return view('crud.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate((new UserProfile())->rules());

        $newImageName = time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('uploads/images'),$newImageName);
        UserProfile::create([
           'name'           =>$request->input('name'),
           'email'          =>$request->input('email'),
           'phone'          =>$request->input('phone'),
           'income'         =>$request->input('income'),
            'image_path'    =>$newImageName
        ]);
        return redirect()->route('profile.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        return view('crud.show',compact('userProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        return view('crud.edit',compact('userProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        //$userProfile->update($request->all());
        $destination = 'uploads/images/'.$userProfile->image_path;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $request->validate((new UserProfile())->rules());
        $newImageName = time().'-'.$request->name.'.'.$request->image->extension();
        $request->image->move(public_path('uploads/images'),$newImageName);
        $userProfile->update([
            'name'           =>$request->input('name'),
            'email'          =>$request->input('email'),
            'phone'          =>$request->input('phone'),
            'income'         =>$request->input('income'),
            'image_path'    =>$newImageName
        ]);
        return redirect()->route('profile.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        $userProfile->delete();
        return redirect()->route('profile.index');
    }
    public function search(Request $request,UserProfile $userProfile){
        $id = $request->input('id');
        $profile = UserProfile::find($id);
        if($profile){
            return view('crud.suche',compact('profile'));
        }else{
            return redirect()->route('profile.index')->with('error','User not Found!');
        }




    }
}
