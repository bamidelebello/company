<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Models\Profile;
use Auth;

class ProfileController extends Controller
{
    public function show()
    {
    	return view('profile.profile');
    }
    public function addProfile(Request $request)
    {
       $this->validate($request,[
       'name'=>'required',
       'first_name'=>'required',
       'last_name'=>'required',
       'designation'=>'required',
       'city'=>'required',
       'profile_pic'=>'required',

       ]);
       $data =new Profile;
       $data->name=$request->input('name');
       $data->first_name=$request->input('first_name');
       $data->last_name=$request->input('last_name');
       $data->designation=$request->input('designation');
       $data->city=$request->input('city');
       $data->user_id=Auth::user()->id;
     if (Input::hasFile('profile_pic')) {
            $file=Input::file('profile_pic');
            $file->move(public_path().'/uploads/',$file->getClientOriginalName());
            $url=URL::to("/").'uploads'.$file->getClientOriginalName();
         
        }
    
       $data->profile_pic=$url;
       $data->save();
        return redirect('/profile')->with('info','The profile has add successfully');

       
    }

    $this->validate($request,[
        'name'=>'required',
        'first_name'=>'required',
        'last_name'=>'required',
        'email'=>'required|unique:admins',
        'profile'=>'required',
    ]);
    $data=new Profile;
    $data->name=$request->Input('name');
    $data->first_name=$request->('first_name');
    $data->last_name=$request->('last_name');
}
