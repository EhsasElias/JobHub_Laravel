<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jobs;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function showdashboard(){
        return view('admin.AdminDashboard');
        $jobs=jobs::with('jobs')->where('id','job_id')->get()->first();
        return response($jobs);
    }
}
