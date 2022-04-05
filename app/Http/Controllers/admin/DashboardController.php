<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\Insertajob;
use App\Http\Controllers\Controller;
use App\Models\jobs;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    //

    public function dashboard(){
        return view('admin.dashboardAdmin');
    }
    public function adminEdit(){
        return view('admin.profileEdit');
    }
   
    public function store(Request $request){



        // $request->validate([
		// 	'job_title' => 'required|string|min:3|max:255',
		// 	'company_name' => 'required|string|min:3|max:255',
		// 	'job_details' => 'required|string|email|max:255',
		// 	'job_numbers' => 'integer|size:10',
		// 	'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:5048'
		// ]);
        // $newimagename=time().'-'.$request->job_title.'.'.$request->image->extenstion();
        // $request->image->move(public_path('images'),$newimagename);

        // $job = Insertajob::create([
        //     'job_title' => $request->input('job_title'),
		// 	'company_name' => $request->input('company_name'),
		// 	'job_details' => $request->input('job_details'),
		// 	'job_numbers' => $request->input('job_numbers'),
		// 	'image' => $request->input('image')
        // ]);

        // return redirect('/postjob');

        $size = $request->file('image')->getSize();
        $name=$request->file('image')->getClientOriginalName();

        $request->file('image')->store('public/images/');
       $photo = new jobs();
       $photo->image = $name;
       $photo->save();
       return redirect()->back();
		
    }
}
