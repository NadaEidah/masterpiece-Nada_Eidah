<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;


class SettingsController extends Controller
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
        return view('settings.settings')->with('settings',Setting::first());
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $setting=Setting::first();

        $this->validate($request,[
            'blog_name'=>'required',
            'phone_number'=>'required',
            'blog_email'=>'required',
            'address'=>'required',
        ]);

        $setting->blog_name = $request->input('blog_name');
        $setting->phone_number= $request->input('phone_number');
        $setting->blog_email=$request->input('blog_email');
        $setting->address=$request->input('address');
        $setting->save();
        return redirect()->back();
      
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
