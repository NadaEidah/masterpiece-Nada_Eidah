<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    // $posts= Post::orderBy('created_at','desc')->take(1)->get();
        // $posts= Post::orderBy('created_at','desc')->paginate(1);

        $posts= Post::orderBy('created_at','desc')->get();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('category',Category::all());
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
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'tools' => 'required',
            'time' => 'required',
            'body' => 'required',
        ]);
        // Post::create($request->all());
        
        $post=new Post;
        $post->title=$request->input('title');
        // $post->category_id=$request->input('category_id');

        $post->tools=$request->input('tools');
        $post->time=$request->input('time');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id;
        $post->save();
        return redirect('post')->with('success', 'Done success ?!!');

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
       
        $post= Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        return view('posts.edit')->with('post',$post)->with('category',Category::all());
        
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
         
        $post = Post::find($id);
        $post->title=$request->input('title');
        $post->tools=$request->input('tools');
        $post->time=$request->input('time');
        $post->body=$request->input('body');
        $post->user_id=auth()->user()->id;
        $post->save();
        return redirect('post')->with('success', 'Done success ?!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->destroy($id);
        return redirect('post')->with('success', 'Done success ?!!');

    }
}
