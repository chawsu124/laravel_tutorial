<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // For Original index fun()
    // public function index($username,$password)// function with parameters
    // {
        //testing
    //     return "This is index method of PostController and
    //          Username is <h1>$username</h1> and Password is <h1>$password</h1>";
    // }

    // eg: For using resource in Route::
    public function index(){
        return "Index method of PostController and it is called by resource in Route:: ";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //------------ Testing own methods connect with views----------
    public function home($name,$country){
        return view('home',compact('name','country'));// call home() method in PostController in views folder
    }
    public function about(){
        $persons = ['Aung Aung','Mg Mg','Su Su'];
        // using compact() method to passing data arguments
        return view('about',compact('persons'));// call about() method in PostController in views folder
    }
    public function contact(){
        return view('contact');// call contact() method in PostController in views folder
    }

    //-----------Passing Data To views By standard method
    // 1. with()  2. compact()
    //public function home($name,$country){
        // return $name;// Simple return without call view()

        //Using with() keyword
        //return view('home')->with('name',$name);// passing argument $name as 'name'
        
        //passing multiple arguments in associative array form $name as 'name' and $country as 'country'
        //return view('home')->with(array('name'=>$name,'country'=>$country));

        // Using compact() keyword
        //return view('home',compact('name','country'));
    //}
}
