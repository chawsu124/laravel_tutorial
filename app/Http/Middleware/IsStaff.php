<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// Declare Auth
use Illuminate\Support\Facades\Auth;

class IsStaff
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        foreach(Auth::user()->roles as $role){
            if($role->role == 'Staff' || $role->role == 'Supervisor' || $role->role == 'Manager'){
                return $next($request);
            }
            
        }
        return redirect('/admin/normal_users');
    }
}
