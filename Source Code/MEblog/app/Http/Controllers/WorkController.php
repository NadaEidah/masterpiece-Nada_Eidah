<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use Redirect;
use PDF;

class WorkController extends Controller
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

        $works = Work::orderBy('created_at','desc')->get();
        return view('works.index', compact('works'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $work=new Work;
        $work->title=$request->input('title');
        $work->body=$request->input('body');
        $work->title=$request->input('title');
        $work->user_id=auth()->user()->id;
        $work->save();

        // Work::create($request->all());
        
        // return Redirect::to('works');
        return redirect('/works');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$work = Work::find($id);
        return view('works.show', compact('work'));
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
        $work=Work::find($id);
        return view('works.edit')->with('work',$work);

    }


    public function update(Request $request, $id)
    {
        //
        $work=Work::find($id);
      
        $work->title=$request->input('title');
        $work->body=$request->input('body');
        $work->title=$request->input('title');
        $work->user_id=auth()->user()->id;
      
        $work->save();
         return redirect('works');
        // return redirect('posts2');


    }
}
