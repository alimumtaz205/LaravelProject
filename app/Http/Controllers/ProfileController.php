<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
//use Intervention\Image\Image;
use Auth;
use Hash;
use Session;
use Image;

class ProfileController extends Controller
{
    //Get the profile user View
    public function profile()
    {
        return view('profile');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);

        $user=Auth::user();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->save();
        Session::flash('message', ' Profile Updated');
        return back();
    }

    public function changePasswordForm(Request $request)
    {
        return view('changepassword');
    }
    public function passwordChange(Request $request)
    {
          
        if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
            return back()->with('error', 'Your Current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'),$request->get('new_password'))==0){
            return back()->with('error', 'Your new password cannot be same with the current password');
        }
     /*   $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|string|min:3|confirmed'
        ]); */
        $user=Auth::user();
        $user->password=bcrypt($request->get('new_password'));
        $user->save();
        Session::flash('message', 'Password changed successfully');
        return back();
    }
    
    public function getProfileAvatar()
    {
        return view('profilepicture');
    }
    public function profilePictureUpload(Request $request)
    {
      if($request->hasFile('avatar')){
          $avatar=$request->file('avatar');
          $filename = time().".".$avatar->getClientOriginalExtension();
          Image::make($avatar)->resize(250,250)->save(public_path('/img/avatar/'.$filename));
            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();
            
      }   
      Session::flash('message', ' Picture Uploaded successfully');
      return back();
    }
 
}
