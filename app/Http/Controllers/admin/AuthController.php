<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //

    public function adminEdit(){
        return view('admin.profileEdit');
    }
  


    // public function login(Request $request){
    //     Validator::validate($request->all(),[
    //         'name'=>['required','min:3','max:10'],
    //         'email'=>['email','required','min:3','max:10','unique:users'],
    //         'password'=>['required','min:5']


    //     ],[
    //         'name.required'=>'this field is required',
    //         'name.min'=>'can not be less than 3 letters',
    //         'name.max'=>'can not be more than 10 letters',
    //         'name.required'=>'this field is required',
    //         'email.required'=>'this field is required',
    //         'email.min'=>'can not be less than 3 letters', 
    //         'email.max'=>'can not be more than 10 letters', 
    //         'email.unique'=>'there is an email in the table',
    //     ]);

    //     $u=new User();
    //     $u->name=$request->input('email');
    //     $u->name=$request->input('password');
    //     $u->save();
    // }

    public function saveuser(){
       
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:10'],
            'email'=>['email','required','min:3','max:10','unique:users'],
            'password'=>['required','min:5']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters',
            'name.max'=>'can not be more than 10 letters',
            'name.required'=>'this field is required',
            'email.required'=>'this field is required',
            'email.min'=>'can not be less than 3 letters', 
            'email.max'=>'can not be more than 10 letters', 
            'email.unique'=>'there is an email in the table',
            'password.required'=>'this field is required',
            'password.min'=>'can not be less than 3 letters', 

        ]);

        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
        if($u->save())
        return redirect()->route('home')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);

    }
    public function resetPassword(){

    }
    public function logout(){

    }

}
