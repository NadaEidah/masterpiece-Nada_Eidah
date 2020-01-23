<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\profile;

class UsersController extends Controller
{
    // public function __construct(){
    //     $this->middleware('admin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('users.create');

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
            'name'=>'required',
            'email'=>'required',
        ]);

        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt('password'),
        ]);

        $profile=profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatar/1.png',
            'facebook'=>'facebook',
            'twitter'=>'twitter',
            'github'=>'github',
            'about'=>'about',
     
        ]);
        // $avatar= $request->avatar;
        // $avatar_new_name=time().$avatar->getClientOriginalName();
        // $avatar->move('uploads/posts',$avatar_new_name);
    
        return redirect()->route('users');
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


    public function admin($id)
    {
        $user=User::find($id);
        $user->admin=1;
        $user->save();
        return redirect()->route('users');

    }
   


    public function notAdmin($id)
    {
        $user=User::find($id);
        $user->admin=0;
        $user->save();

        return redirect()->route('users');

    }

}
