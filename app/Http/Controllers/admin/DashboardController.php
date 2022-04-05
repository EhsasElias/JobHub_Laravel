<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\Insertajob;
use App\Http\Controllers\Controller;
use App\Models\jobs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnSelf;

class DashboardController extends Controller
{
    //

    public function dashboard()
    {
        return view('admin.dashboardAdmin');
    }
    public function adminEdit()
    {
        return view('admin.profileEdit');
    }

    public function storejob(Request $request)
    {
        Validator::validate($request->all(), [
            	'job_title' => 'required|string|min:3|max:255',
        	'company_name' => 'required|string|min:3|max:255',
        	'job_details' => 'required',
        	'job_numbers' => 'integer',
        	'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:5048'

        ], [
            'job_title.required' => 'this field is required',
            'job_title.min' => 'can not be less than 3 letters',
            'job_title.max' => 'can not be less than 255 letters',
            'company_name.required' => 'this field is required',
            'company_name.min' => 'can not be less than 3 letters',
            'company_name.max' => 'can not be less than 255 letters',
            'job_details.required' => 'this field is required',
            'job_numbers.integer' => 'must be integer',
      
            'image.required' => 'this field is required',
            'image.mimes' => 'the file is not an image',
            'image.max' => 'can not be less than 255 letters',


        ]);


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
        $job=new jobs();
        $job->job_title=$request->job_title;
        $job->company_name=$request->company_name;
        $job->job_details=$request->job_details;
        $job->job_numbers=$request->job_numbers;
        $job->image=$request->image;

        // $u->password=Hash::make($request->user_pass);
        // $u->email=$request->u_email;
        if($job->save())
        return redirect()->route('postjob')
        ->with(['success'=>'user created successful']);
        return back()->with(['error'=>'can not create user']);
     

        // $size = $request->file('image')->getSize();
        // $name = $request->file('image')->getClientOriginalName();

        // $request->file('image')->store('public/images/');
        // $photo = new jobs();
        // $photo->image = $name;
        // $photo->save();
        // return redirect()->back();
    }
}
