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
         <div class="inpdata">
            <p class="text">{{'name'}}</p>
            <p class="text">{{'email'}}</p>
            <p class="text">{{'password'}}</p>
            <button class="Update">Update</button>
        </div>
            <div class="pdata">
            <label for="fname" class="ptext">Firstname</label>
            <input type="text" class="tarea" name="fname">

            <label for="lanme" class="ptext">Lastname</label>
            <input type="text" class="tarea" name="lname">

            <label for="dob" class="ptext">DOB</label>
            <input type="dob" class="tarea" name="dob">

            <label for="img" class="ptext">Image</label>
            <input type="file" class="tarea" name="img">

            <label for="game" class="ptext">Game</label>
            <input type="text" class="tarea" name="game">

            <label for="skill" class="ptext">Skills</label>
            <input type="text" class="tarea" name="skill">

            <label for="rank" class="ptext">Rank</label>
            <input type="text" class="tarea" name="rank">
        </div>
</div>

<a href="/personal/show">Go to Ranking Boards</a>       
 @endsection 