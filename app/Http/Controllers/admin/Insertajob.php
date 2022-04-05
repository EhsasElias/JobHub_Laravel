<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\jobs;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Insertajob extends Controller
{
    public function insert(){
     
        return view('admin.dashboardAdmin');
    }
   
   
}
