<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobViews extends Controller
{
    public function aboutUS(){
        return view('aboutUS');
    }
    public function contactUS(){
        return view('contactUS');
    }
    public function edutrains(){
        return view('edutrains');
    }
    public function exper(){
        return view('exper');
    }
    public function favoritejobs(){
        return view('favoritejobs');
    }
    public function findjob(){
        return view('findjob');
    }
    public function Header(){
        return view('Header');
    }
    public function index(){
        return view('index');
    }
    public function jobDetails(){
        return view('jobDetails');
    }
    public function Notification(){
        return view('Notification');
    }
    public function ourServices(){
        return view('ourServices');
    }
    public function profileApplication(){
        return view('profileApplication');
    }
    public function profileChangePassword(){
        return view('profileChangePassword');
    }
    public function profileDashboard(){
        return view('profileDashboard');
    }
    public function profileEdit(){
        return view('profileEdit');
    }
    public function signIN(){
        return view('signIN');
    }
    public function signUP(){
        return view('signUP');
    }
    public function skills(){
        return view('skills');
    }
    
}

