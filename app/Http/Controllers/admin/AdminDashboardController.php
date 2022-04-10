<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\companies;
use App\Models\jobs;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function showdashboard(){
        // return view('admin.AdminDashboard');
        $jobs=companies::with('job')->where('id',2)->get()->first();
        return response($jobs);
    }
}
