<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function dashboard()
    {
        return view('admin.PostJob');
    }
   

    public function storejob(Request $request)
    {
        Validator::validate($request->all(), [
            'job_title' => 'required|string|min:3|max:255',
        	'company_name' => 'required|string|min:3|max:255',
        	'job_details' => 'required',
        	'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:5048'

        ], [
            'job_title.required' => 'this field is required',
            'job_title.min' => 'can not be less than 3 letters',
            'job_title.max' => 'can not be less than 255 letters',
            'company_name.required' => 'this field is required',
            'company_name.min' => 'can not be less than 3 letters',
            'company_name.max' => 'can not be less than 255 letters',
            'job_details.required' => 'this field is required',
            'image.required' => 'this field is required',
            'image.mimes' => 'the file is not an image',
            'image.max' => 'can not be less than 255 letters',


        ]);


        $job=new jobs();
        $job->job_title=$request->job_title;
        $job->company_name=$request->company_name;
        $job->job_details=$request->job_details;

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $job->image = $imageName;
  
        
        if($job->save())
        return redirect()->route('postjob')
        ->with(['success'=>'data inserted successfully']);
        return back()->with(['error'=>'can not insert data']);
  
   
    }
}
