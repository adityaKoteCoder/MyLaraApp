@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        @foreach($alldata as $rdata)
                <div class="pdata">
                    <label for="fname" class="ptext">Name</label>
                    <p class="sdata">{{$rdata->firstname}} {{$rdata->lastname}}</p>
                    
                    <label for="img" class="ptext">Image</label>
                    <p class="sdata">{{$rdata->image}}</p>
                   
                    <label for="game" class="ptext">Game</label>
                    <p class="sdata">{{$rdata->game}}</p>
        
                    <label for="skill" class="ptext">Skills</label>
                    <p class="sdata">{{$rdata->skills}}</p>

                    <label for="rank" class="ptext">Rank</label>
                    <p class="sdata">{{$rdata->rank}}</p>
                </div>
                @endforeach
                <center><a href="/personal/show">Back</a></center>
 @endsection 