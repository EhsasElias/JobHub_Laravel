<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class settingController extends Controller
{
    function generateroles(){
        Role::create([
            'name' => 'super_admin',
            'display_name' => 'Project Manage', // optional
            // 'description' => 'User is the owner of a given project', // optional
        ]);
        Role::create([
            'name' => 'admin',
            'display_name' => 'Managment', // optional
            // 'description' => 'User is the owner of a given project', // optional
        ]);
        Role::create([
            'name' => 'client',
            'display_name' => 'clients', // optional
            // 'description' => 'User is the owner of a given project', // optional
        ]);
    }
}
