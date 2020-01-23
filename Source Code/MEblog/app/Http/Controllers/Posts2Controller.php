<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post2;
use App\Tag;


class Posts2Controller extends Controller
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
        //
        $posts2= Post2::orderBy('created_at','desc')->get();
        return view('posts2.index')->with('posts2',$posts2);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $category=Category::all();
        // if ($category->count()==0) {
        //     return redirect()->route('category.create');
        // }

        // $tags=Tag::all();
        // if ($tags->count()==0) {
        //     return redirect()->route('tag.create');
        // }
        return view('posts2.create')->with('category',Category::all());
        // ->with('category',Category::all())->with('tags',Tag::all())
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'category_id'=>'required',
            'featrued' => 'required|image',
        ]);
        $featrued= $request->featrued;
        $featrued_new_name=time().$featrued->getClientOriginalName();
        $featrued->move('uploads/posts',$featrued_new_name);

        // $post2=Post2::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'category_id'=>$request->category_id,
        //     'featrued' => 'uploads/posts/'.$featrued_new_name,
        //     // 'user_id'=>auth()->user()->id,
        //     'slug'=>str_slug($request->title), //my post=>my-post
        // ]);
        $post2=new Post2;
        $post2->title = $request->input('title');
        $post2->content= $request->input('content');
        $post2->category_id=$request->input('category_id');
        $post2->featrued='uploads/posts/'.$featrued_new_name;
        $post2->slug=($request->title);
        $post2->user_id=auth()->user()->id;

        $post2->save();
        // // $post2->tags()->attach($request->tags);
        return redirect('home');
        // return redirect('post2');
//  dd($request->all()); 
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
        $post2= Post2::find($id);
        return view('posts2.show')->with('post2',$post2);
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
        $post2=Post2::find($id);
        return view('posts2.edit')->with('post2',$post2)->with('category',Category::all());

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
        
        $post2=Post2::find($id);
        // $post2->title=$request->input('title');
        // $post2->content=$request->input('content');
        // $post2->category_id=$request->input('category_id');
        // $post2->featrued=$request->input('featrued');
        // // $post2->user_id=auth()->user()->id;
        // $post2->save();
        // return redirect('post2')->with('success', 'Done success ?!!');
        // $this->validate($request,[
        //     'title' => 'required',
        //     'content' => 'required',
        //     'category_id'=>'required',
        //     'featrued' => 'required|image',

        // ]);
        if($request->hasFile('featrued')){
            $featrued= $request->featrued;
            $featrued_new_name=time().$featrued->getClientOriginalName();
            $featrued->move('uploads/posts/',$featrued_new_name);
            $post2->featrued='uploads/posts/'.$featrued_new_name;
        }
        
        $post2->title = $request->title;
        $post2->content= $request->content;
        $post2->category_id=$request->category_id;
        $post2->featrued=$request->featrued;
        $post2->user_id=auth()->user()->id;
        $post2->save();
         return redirect('post2');


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
        $post2=Post2::find($id);
        $post2->destroy($id);
        return redirect()->back();


    }
}
