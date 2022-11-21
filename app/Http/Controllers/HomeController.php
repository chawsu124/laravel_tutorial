<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Declare using model
use App\Models\Gallery;
// Declare using Storage
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('home',compact('galleries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required',
            'img.*' => 'image',
        ]);

        if($request->hasFile('img')){

            foreach($request->file('img') as $image){
                // move images in public->image->
                $filename = time() . '_' . $image->getClientOriginalName();

                $image->move(public_path('image'),$filename);

                // insert image to DB
                Gallery::create([
                    'name' => $filename,
                ]);
            }
        }
        
        return redirect('/')->with('status','Your Selected Images were Successfully Uploaded ! ');
    }

    public function destroy($id){
        $gallery = Gallery::find($id);

        //Storage::delete('image/' . $gallery->name);
        $image_path = public_path().'/image/'.$gallery->name;
        //dd($image_path);
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }

        $gallery->delete();

        return redirect('/')->with('status','Your Selected Images were Successfully Deleted ! ');
    }

    public function download($id){
        $gallery = Gallery::find($id);

        $image_path = public_path().'/image/'.$gallery->name;
        return Response::download($image_path); 

        //return Storage::download('image/' . $gallery->name);

    }

}
