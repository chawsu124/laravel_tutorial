<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    // for Session page
    public function index(){
        return view('sessionHome');
    }
    // set Session
    public function setSession(Request $request){
        //$request->session()->put('name','Waifer start set session');// put('key','value')// set session
        //(or)
        session(['name'=>'WaiferKolar start session']);

        // return to view('sessionHome'); with('status','value')
        return redirect('/session')->with('status','Successfully set session name');
    }
    // get Session
    public function getSession(Request $request){
        // for single getSession
        //$name = $request->session()->get('name');// get('key')// get session
        //(or)
        //$name = session('name');

        // for multiple getSession
        // using put() method
        //$name = $request->session()->get('Nationality');
        //return redirect('/session')->with('status',$name);

        // using push() method
        $name = $request->session()->get('data'); // get('data') is session name of set multiple session
        return redirect('/session')->with('status',json_encode($name));
    }
    // delete Session
    public function deleteSession(Request $request){
        $request->session()->flush();// use flush() method to delete session// delete session
        
        // return to view('sessionHome');
        return redirect('/session');
    }

    //set multiple Session
    public function setMultipleSession(Request $request){
        // using put() method
        //$request->session()->put(['name'=>'Waifer Kolar','age'=>'35','Nationality'=>'Myanmar']);
        //(or)
        // using push() method
        $data = ['name'=>'Waifer Kolar','age'=>'35','Nationality'=>'Burmese'];
        $request->session()->push('data',$data);

        return redirect('/session')->with('status','Successfully set multiple session');
    }
}
