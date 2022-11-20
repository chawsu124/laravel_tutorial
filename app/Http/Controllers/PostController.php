<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;// use Post model to create

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   // Validate
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        //create
        Post::create([
            'title'=> $request->get('title'),
            'content'=> $request->get('content'),
        ]);

        return redirect('/posts')->with('successMsg','You have successfully Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit',compact('post'));
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
        // Validate
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        // update
        Post::find($id)->update([
            'title'=> $request->get('title'),
            'content'=> $request->get('content'),
        ]);

        return redirect('/posts')->with('successMsg','You have successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('/posts')->with('successMsg','You have successfully Deleted');
    }
}
