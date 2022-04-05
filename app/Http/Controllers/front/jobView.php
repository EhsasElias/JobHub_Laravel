<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobView extends Controller
{
    public function aboutUS(){
        return view('front.aboutUS');
    }
    public function contactUS(){
        return view('front.contactUS');
    }
    public function edutrains(){
        return view('front.edutrains');
    }
    public function exper(){
        return view('front.exper');
    }
    public function favoritejobs(){
        return view('front.favoritejobs');
    }
    public function findjob(){
        return view('front.findjob');
    }
   
    public function index(){
        return view('front.index');
    }
    public function jobDetails(){
        return view('front.jobDetails');
    }
    public function Notification(){
        return view('front.Notification');
    }
    public function ourServices(){
        return view('front.ourServices');
    }
    public function profileApplication(){
        return view('front.profileApplication');
    }
    public function profileChangePassword(){
        return view('front.profileChangePassword');
    }
    public function profileDashboard(){
        return view('front.profileDashboard');
    }
    public function profileEdit(){
        return view('front.profileEdit');
    }
    public function signIN(){
        return view('front.signIN');
    }
    public function signUP(){
        return view('front.signUP');
    }
    public function skills(){
        return view('front.skills');
    }
}
