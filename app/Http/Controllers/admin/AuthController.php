<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function adminEdit()
    {
        return view('admin.AdminprofileEdit');
        $user = User::with('profile')->where('id', 1)->get()->first();
        return response($user);
    }



    public function showLogin()
    {
        if (Auth::check())
            return redirect()->route($this->checkRole());
        else
            return view('front.signIN');
    }
    public function login(Request $request)
    {
        Validator::validate($request->all(), [
            'name' => ['required', 'min:3', 'max:50'],
            'password' => ['required', 'min:5'],
           


        ], [
            'name.required' => 'this field is required',
            'name.min' => 'can not be less than 3 letters',
            'name.max' => 'can not be more than 50 letters',
            'password.required' => 'this field is required',
            'password.min' => 'can not be less than 3 letters',
      

        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password, 'is_active' => 1])) {


            if (Auth::user()->hasRole('admin'))
                return redirect()->route('save_user');
            else
                return redirect()->route('home');
        } else {
            return redirect()->route('login')->with(['message' => 'incorerct username or password or your account is not active ']);
        }
    }
   

    public function register(Request $request)
    {

        Validator::validate($request->all(), [
            'name' => ['required', 'min:3', 'max:10'],
            'email' => ['email', 'required', 'min:3', 'unique:users'],
            'password' => ['required', 'min:5'],
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:5048',


        ], [
            'name.required' => 'this field is required',
            'name.min' => 'can not be less than 3 letters',
            'name.max' => 'can not be more than 10 letters',
            'name.required' => 'this field is required',
            'email.required' => 'this field is required',
            'email.min' => 'can not be less than 3 letters',
            'email.unique' => 'there is an email in the table',
            'password.required' => 'this field is required',
            'password.min' => 'can not be less than 3 letters',
            'image.required' => 'this field is required',
            'image.mimes' => 'choose a valid file (image)',

        ]);


        $u = new User();
        $u->name = $request->name;
        $u->password = Hash::make($request->password);
        $u->email = $request->email;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $u->image = $imageName;
        
        
        if($u->save()){
            $u->attachRole('admin');
            return redirect()->route('saveuser')
            ->with(['success'=>'user created successful']);
        }

      
        else{return back()->with(['error'=>'can not create user']);}
    }
    public function resetPassword()
    {
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
