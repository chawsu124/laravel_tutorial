<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;// use User model to create
use App\Models\Role;// use Role model to create

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('IsManager');
    }

    public function index(){
        $users = User::all();
        return view('back.user.index',compact('users'));
    }

    public function edit($id){
        $user = User::find($id);

        $roles = Role::all();
        return view('back.user.edit',compact('user','roles'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $roleIds = $request->role_ids;// role_ids is checkbox name

        $user->roles()->sync($roleIds);//sync is turn on / turn off

        return redirect('/admin/users');
    }

    //|| $role->role == 'Supervisor' || $role->role == 'Staff'
    // 12345678
}
