@extends('layouts.app')

@section('content')
<style>
    body{
        background: white;
    }
   .myinof  {
        border-style: solid;
        margin: 100px;
        width: 50%;
        margin-left: 400px;
    }
    .inside{
        padding:40px; 
    }
    .getto{
        color: blue;
    }
    .getBlack{
        color: black;
    }
    </style>

    
    <div class="myinof">
        <div class="inside">
          <h1>   About me..... </h1>
<hr>
            <h1 class="getto">My Name : <span class="getBlack">{{ Auth::user()->name }}</span> </h1> 
            <h1 class="getto">My Email: <span class="getBlack"> {{ Auth::user()->email }}</span> </h1> 
            <h1 class="getto">Start in BounnChanns : <span class="getBlack"> {{date('d-m-Y', strtotime( Auth::user()->created_at)) }}</span> </h1>
        </div>
    </div>

@endsection
