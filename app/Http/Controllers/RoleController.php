<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;// use Role model to create

class RoleController extends Controller
{
    public function __construct(){
        $this->middleware('IsManager');
    }

    public function index(){
        $roles = Role::all();
        return view('back.role.index',compact('roles'));
    }
}
