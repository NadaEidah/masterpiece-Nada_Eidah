@extends('layouts.app')

@section('content')
<style>
        body{
            background: white;
        }
       .ch  {
            border-style: solid;
            border-color: green;
            margin-top: 20px;
            margin-left: 500px;

            width: 50%;
            
            padding: 50px;   
        }
        
        </style>
    <div >
        <div class="ch" style=" margin-top: 70px;">
            <h1 style="font-weight: bold;">Commitment Pledge:</h1><hr>
           <h1>     I am a  
            <a   href="#">
                {{ Auth::user()->name }} 
            </a>.
             I pledge to complete my challenge to the 
                end and never surrender until I achieve what I want until I reach my goals.</h1>
        </div>
    <div  class="ch">
        <h1 style="font-weight: bold;">What you can do in BounnChanns? </h1><hr>
        <h3>-Setting goals</h3>
        <h3>-add a method</h3>
        <h3>-add the final times</h3>
        <h3>-Challenge description</h3><br><br>
        
        <h1 style="font-weight: bold;">Instructions for use: </h1><hr>
        <h3>#you can change the in challenge Useful (edit and delete)</h3>
        <h3>#you can change the in challenge Fun (edit and delete)</h3>
        <h3>#you can  not change the in step </h3>
        <h3>#you can  not change the in post </h3>
<br><br><br>
        <h1 style="color:red">ARE YOU READY !! PRESS BUTTON "LEST GO"</h1><br>
        <button class="nav-item"><a class="nav-link" href="/home">lest go..</a></button> <br>

      
       
    </div>
    </div>

@endsection