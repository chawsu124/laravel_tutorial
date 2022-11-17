<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use call from App->Http->Requests->yourCreateRequest
use  App\Http\Requests\ProductInsertFormRequest;

use App\Models\Product;// use Product model to create

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show product insert form
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductInsertFormRequest $request)// (yourCreateRequestName $request)
    {
        // get data from product insert form
        //return $request->all();

        //***********/ get Image for one
        // if($request->has('img')){
        //     $image = $request->file('img');// get image file
        //     $filename = uniqid() . '_' . $image->getClientOriginalName() . '.' . $image->getClientOriginalExtension();// to unique for image
        //     $image->move(public_path() . '/uploads/', $filename);// for move image to put public->uploads->
        
        //     //use mass create() to insert product data to DB
        //     Product::create([
        //         'title'=>$request->get('title'),//for 'title' column,  from get insert form
        //         'price'=>$request->get('price'),
        //         'description'=>$request->get('description'),
        //         'imgs'=>$filename,
        //     ]);
        // }

        //**********get Image for multiple in Array form */
        $images = $request->file('img');// get all images from form
        $fileArr = array();// create $fileArr to input multiple images

        foreach($images as $img){
            $filename = uniqid() . '_' . $img->getClientOriginalName();// unique name
            array_push($fileArr,$filename);// put each img in array
            $img->move(public_path() . '/uploads/',$filename);
        }

        //use mass create() to insert product data to DB
        Product::create([
            'title'=>$request->get('title'),//for 'title' column,  from get insert form
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'imgs'=>serialize($fileArr),// for 'imgs' column, put $fileArr from get insert form 
        ]);
        

        // return with 'status' session
        return redirect('products/create')->with('status','Successfully Inserted Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Lorem ipsum dolor sit amet consectetur adipisicing elit. In saepe nisi nam excepturi.
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
}
