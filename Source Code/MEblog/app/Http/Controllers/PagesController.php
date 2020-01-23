<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    //
    public function index(){
        // return "NAAD ";
        
        return view('pages.index');

    } 

    function about  () {
        $name='toto';
        return view('pages.about',compact('name',$name));
    }


    function challenge  () {
        return view('pages.challenge');
    }
    function info () {
        // $user= User::find($id);
        return view('pages.info');
    }
}

