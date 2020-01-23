<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Post2;
use App\Tag;
use App\Work;
class siteUIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index')
                            ->with('category',Category::take(2)->get())
                            ->with('tag',Tag::take(2)->get())
                            // >with('all_post',Post::orderBy('created_at','desc')->all())
                            //chalenges befit 
                            ->with('first_post',Post::orderBy('created_at','desc')->first())
                            ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                            // day work 
                            ->with('first_work',Work::orderBy('created_at','desc')->first())
                            ->with('second_work',Work::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            ->with('third_work',Work::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())

                             //chalenges func 
                             ->with('first_post2',Post2::orderBy('created_at','desc')->first())
                             ->with('second_post2',Post2::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                             ->with('third_post2',Post2::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                             ->with('four_post2',Post2::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())

                            ->with('settings',Setting::first())
                            ;

    }

    // ->with('blog_name',Setting::first()->blog_name)
    public function showPost()
    {
        //
        // $post2=Post2::where('slug',$slug)->first();
        return view('index')->with('post')
        ->with('post',Post::orderBy('created_at','desc')->all())

                            ;

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
}
